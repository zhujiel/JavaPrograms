package com.ness.iskn.demo.bookings.service;

import com.ness.iskn.demo.bookings.model.User;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.jdbc.core.JdbcTemplate;
import org.springframework.security.crypto.password.PasswordEncoder;
import org.springframework.stereotype.Service;

import java.util.List;

@Service
public class UserService {

    private final JdbcTemplate jdbcTemplate;
    private final PasswordEncoder passwordEncoder;

    @Autowired
    public UserService(JdbcTemplate jdbcTemplate, PasswordEncoder passwordEncoder) {
        this.jdbcTemplate = jdbcTemplate;
        this.passwordEncoder = passwordEncoder;
    }

    public void registration(String username, String password, String Role){

        String hashedPassword = passwordEncoder.encode(password);

        jdbcTemplate.update("INSERT INTO users (Username, Password, Role) VALUES (?, ?, ?)", username, hashedPassword, Role);

    }

    public User getUserByUsername(String username){
        List<User> users = jdbcTemplate.query("SELECT * FROM users",
                (rs, rowNum) ->{
                    User user = new User();
                    user.setUserId(rs.getInt("ID"));
                    user.setUserName(rs.getString("Username"));
                    user.setPassword(rs.getString("Password"));
                    user.setRole(rs.getString("Role"));
                    return user;
                }, username);
        return users.isEmpty() ? null : users.get(0);
    }
}
