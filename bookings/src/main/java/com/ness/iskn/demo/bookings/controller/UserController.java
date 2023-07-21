package com.ness.iskn.demo.bookings.controller;

import com.ness.iskn.demo.bookings.model.User;
import com.ness.iskn.demo.bookings.repository.HotelRepository;
import com.ness.iskn.demo.bookings.repository.UserRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.boot.autoconfigure.neo4j.Neo4jProperties;
import org.springframework.security.access.prepost.PreAuthorize;
import org.springframework.security.authentication.AnonymousAuthenticationToken;
import org.springframework.security.core.Authentication;
import org.springframework.security.core.context.SecurityContextHolder;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.*;
import org.springframework.web.servlet.ModelAndView;

@RestController
public class UserController {

    @Autowired
    private HotelRepository hotelRepository;
    @GetMapping("/login")
    public ModelAndView index(Model model){
        User user = new User();
        model.addAttribute("user", user);
        ModelAndView modelAndView = new ModelAndView();
        modelAndView.setViewName("login");
        return modelAndView;
    }

    @PreAuthorize("hasRole('ADMIN')")
    @GetMapping("/admin")
    public String admin(){
        return "Hello admin";
    }

    @GetMapping("/listOfHotel")
    public ModelAndView userLogin(Model model){
        ModelAndView modelAndView = new ModelAndView();
        modelAndView.setViewName("listOfHotel");
        model.addAttribute("hotels", hotelRepository.list());
        return modelAndView;
    }
}
