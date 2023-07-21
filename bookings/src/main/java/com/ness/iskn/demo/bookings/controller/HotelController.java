package com.ness.iskn.demo.bookings.controller;

import com.ness.iskn.demo.bookings.model.Hotel;
import com.ness.iskn.demo.bookings.repository.HotelRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RestController;
import org.springframework.web.servlet.ModelAndView;

import java.util.List;

@RestController

public class HotelController {

    @Autowired
    HotelRepository hotelRepository;
    /*@GetMapping
    public String check(){
        return "Welcome!";
    }

    @GetMapping(path="/list")
    public List<Hotel> getAllHotelInfo(){
        return hotelRepository.list();
    }*/

    @RequestMapping(value = "/hotel", method = RequestMethod.GET)
    /*public String index(Model model){
        model.addAttribute("hotels", hotelRepository.list());
        return "hotel";
    }*/
    public ModelAndView index(Model model){
        ModelAndView modelAndView = new ModelAndView();
        modelAndView.setViewName("listOfHotel");
        model.addAttribute("hotels", hotelRepository.list());
        return modelAndView;
    }

}
