package com.ness.iskn.demo.bookings.model;

public class Booking {

    private int bookingId;

    private int userId;

    private int hotelId;

    private String dateFrom;

    private String dateTo;

    private int totalPrice;

    public int getBookingId() {
        return bookingId;
    }

    public int getUserId() {
        return userId;
    }

    public int getHotelId() {
        return hotelId;
    }

    public String getDateFrom() {
        return dateFrom;
    }

    public String getDateTo() {
        return dateTo;
    }

    public int getTotalPrice() {
        return totalPrice;
    }

    public void setUserId(int userId) {
        this.userId = userId;
    }

    public void setHotelId(int hotelId) {
        this.hotelId = hotelId;
    }

    public void setDateFrom(String dateFrom) {
        this.dateFrom = dateFrom;
    }

    public void setDateTo(String dateTo) {
        this.dateTo = dateTo;
    }

    public void setTotalPrice(int totalPrice) {
        this.totalPrice = totalPrice;
    }
}
