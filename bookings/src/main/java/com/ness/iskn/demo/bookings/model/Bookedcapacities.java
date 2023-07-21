package com.ness.iskn.demo.bookings.model;

public class Bookedcapacities {

    private int hotelId;

    private String date;

    private int bookedCapacity;

    public int getHotelId() {
        return hotelId;
    }

    public String getDate() {
        return date;
    }

    public int getBookedCapacity() {
        return bookedCapacity;
    }

    public void setDate(String date) {
        this.date = date;
    }

    public void setBookedCapacity(int bookedCapacity) {
        this.bookedCapacity = bookedCapacity;
    }
}
