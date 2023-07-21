package com.ness.iskn.demo.bookings.repository;

import com.ness.iskn.demo.bookings.DAO.DAO;
import com.ness.iskn.demo.bookings.model.Hotel;
import org.slf4j.ILoggerFactory;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.dao.DataAccessException;
import org.springframework.jdbc.core.JdbcTemplate;
import org.springframework.jdbc.core.RowMapper;
import org.springframework.stereotype.Repository;

import java.util.ArrayList;
import java.util.List;
import java.util.Optional;

@Repository
public class HotelRepository implements DAO<Hotel> {

    @Autowired
    private JdbcTemplate jdbcTemplate;
    RowMapper<Hotel> rowMapper = (rs,rowNum) -> {
        Hotel hotel = new Hotel();
        hotel.setName(rs.getString("Name"));
        hotel.setDefaultPrice(rs.getInt("Default_price"));
        hotel.setCapacity(rs.getInt("Capacity"));
        return hotel;
    };
    public HotelRepository(JdbcTemplate jdbcTemplate) {
        this.jdbcTemplate = jdbcTemplate;
    }

    @Override
    public List<Hotel> list() {
        String sql = "SELECT Name, Default_price, Capacity FROM hotels";
        return jdbcTemplate.query(sql,rowMapper);
    }

    @Override
    public void create(Hotel hotel) {
        String sql = "INSERT INTO hotels(Name, Default_price, Capacity) VALUES(?,?,?)" ;
        int insert = jdbcTemplate.update(sql, hotel.getName(), hotel.getDefaultPrice(), hotel.getCapacity());
        if(insert == 1){
            System.out.println("New hotel created: " + hotel.getName());
        }
    }

    @Override
    public Optional<Hotel> get(int id) {
        String sql = "SELECT Name, Default_price, Capacity FROM hotels WHERE hotels.ID = ?";
        Hotel hotel = null;
        try{
            hotel = jdbcTemplate.queryForObject(sql, new Object[]{id}, rowMapper);
        }catch (DataAccessException ex){
            System.out.println("Hotel not found: " + id);
        }
        return Optional.ofNullable(hotel);
    }

    @Override
    public void update(Hotel hotel, int id) {
        String sql = "UPDATE hotels SET Name = ?, Default_price = ?, Capacity = ? WHERE hotels.ID =?";
        int update = jdbcTemplate.update(sql, hotel.getName(), hotel.getDefaultPrice(), hotel.getCapacity(), hotel.getHotelId());
        if(update == 1){
            System.out.println("Hotel update: " + hotel.getName());
        }
    }

    @Override
    public void delete(int id) {
        jdbcTemplate.update("DELETE FROM hotels WHERE hotels.ID = ?", id);
    }
}
