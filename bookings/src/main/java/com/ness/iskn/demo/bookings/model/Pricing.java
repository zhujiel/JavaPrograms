package com.ness.iskn.demo.bookings.model;

public class Pricing {

    private int pricingId;

    private int hotelId;

    private String dateFrom;

    private String dateTo;

    private int dailyPrice;

    public int getPricingId() {
        return pricingId;
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

    public int getDailyPrice() {
        return dailyPrice;
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

    public void setDailyPrice(int dailyPrice) {
        this.dailyPrice = dailyPrice;
    }
}
