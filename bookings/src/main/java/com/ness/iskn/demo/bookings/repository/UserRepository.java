package com.ness.iskn.demo.bookings.repository;

import com.ness.iskn.demo.bookings.DAO.DAO;
import com.ness.iskn.demo.bookings.model.User;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.dao.DataAccessException;
import org.springframework.jdbc.core.JdbcTemplate;
import org.springframework.jdbc.core.RowMapper;
import org.springframework.security.crypto.password.PasswordEncoder;
import org.springframework.stereotype.Repository;

import java.util.List;
import java.util.Optional;

@Repository
public class UserRepository implements DAO<User> {

    @Autowired
    private JdbcTemplate jdbcTemplate;

    RowMapper<User> rowMapper = (rs, rowNum) -> {
        User user = new User();
        user.setName(rs.getString("Name"));
        user.setUserName(rs.getString("Username"));
        user.setPassword(rs.getString("Password"));
        return user;
    };
    public UserRepository(JdbcTemplate jdbcTemplate) {
        this.jdbcTemplate = jdbcTemplate;
    }
    @Override
    public List<User> list() {
        String sql = "SELECT Name, Username, Password, Role FROM users";
        return jdbcTemplate.query(sql,rowMapper);
    }

    @Override
    public void create(User user) {
        String sql = "INSERT INTO users(Name, Username, Password) VALUES(?,?,?)" ;
        int insert = jdbcTemplate.update(sql, user.getName(), user.getUserName(), user.getPassword());
        if(insert == 1){
            System.out.println("New user created: " + user.getName());
        }
    }

    @Override
    public Optional<User> get(int id) {
        String sql = "SELECT Name, Default_price, Capacity FROM hotels WHERE hotels.ID = ?";
        User user = null;
        try{
            user = jdbcTemplate.queryForObject(sql, new Object[]{id}, rowMapper);
        }catch (DataAccessException ex){
            System.out.println("User not found: " + id);
        }
        return Optional.ofNullable(user);
    }

    @Override
    public void update(User user, int id) {
        String sql = "UPDATE hotels SET Name = ?, Default_price = ?, Capacity = ? WHERE hotels.ID =?";
        int update = jdbcTemplate.update(sql, user.getName(), user.getUserName(), user.getPassword(), user.getUserId());
        if(update == 1){
            System.out.println("User update: " + user.getName());
        }
    }

    @Override
    public void delete(int id) {
        jdbcTemplate.update("DELETE FROM users WHERE hotels.ID = ?", id);
    }
}
