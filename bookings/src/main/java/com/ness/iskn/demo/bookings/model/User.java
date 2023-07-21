package com.ness.iskn.demo.bookings.model;

import org.springframework.stereotype.Repository;

@Repository
public class User{
    private int userId;

    private String name;

    private String userName;

    private String password;

    private String role;

    public void setUserId(int userId) {
        this.userId = userId;
    }

    public String getRole() {
        return this.role;
    }

    public void setRole(String role) {
        this.role = role;
    }

    public int getUserId() {
        return userId;
    }

    public String getName() {
        return name;
    }

    public String getUserName() {
        return userName;
    }


    public void setName(String name) {
        this.name = name;
    }

    public void setUserName(String userName) {
        this.userName = userName;
    }

    public void setPassword(String password) {
        this.password = password;
    }

    public String getPassword() {
        return password;
    }


    public String getUsername() {
        return userName;
    }
}
