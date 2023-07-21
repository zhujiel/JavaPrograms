package com.ness.iskn.demo.bookings.model;

public class Hotel {

    private int hotelId;

    private String name;
    private int defaultPrice;
    private int capacity;

    public int getHotelId(){
        return hotelId;
    }

    public void setHotelId(int hotelId) {
        this.hotelId = hotelId;
    }
    public String getName(){
        return name;
    }

    public void setName(String name){
        this.name = name;
    }

    public int getDefaultPrice(){ return defaultPrice; }

    public void setDefaultPrice(int defaultPrice){ this.defaultPrice = defaultPrice; }

    public int getCapacity(){ return capacity;}

    public void setCapacity(int capacity){ this.capacity = capacity; }

}
