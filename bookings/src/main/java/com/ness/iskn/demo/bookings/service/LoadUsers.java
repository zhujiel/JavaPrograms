package com.ness.iskn.demo.bookings.service;

import com.ness.iskn.demo.bookings.model.User;
import com.ness.iskn.demo.bookings.repository.UserRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.boot.CommandLineRunner;
import org.springframework.security.provisioning.UserDetailsManager;
import org.springframework.stereotype.Component;

import java.util.List;

@Component
public class LoadUsers implements CommandLineRunner {

    private final UserRepository userRepository;
    private final UserDetailsManager userDetailsManager;

    private CustomUserDetails customUserDetails;

    @Autowired
    public LoadUsers(UserRepository userRepository, UserDetailsManager userDetailsManager) {
        this.userRepository = userRepository;
        this.userDetailsManager = userDetailsManager;
    }

    @Override
    public void run(String... arg){
        List<User> users = userRepository.list();
        List<CustomUserDetails> customUsersList = customUserDetails.convertToCustomUserDetials(users);
        for(CustomUserDetails userDetails : customUsersList){
            userDetailsManager.createUser(userDetails);
        }
    }
}
