package com.example.Negozio.models;

import jakarta.persistence.*;

@Entity
@Table (name="products")
public class Product {
    
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    
    private Long id;


    String name;
    Double price;
    int quantity;

    @ManyToOne
    @JoinColumn(name = "store_id")
    private Store store;

    public Product(String name,Double price,int quantity){
        this.name=name;
        this.price=price;
        this.quantity=quantity;
    }
    public Product(){}

    public Long getId(){
        return this.id;
    }

    public void setId(Long id){
        this.id=id;
    }

    public String getName(){
        return this.name;
    }

    public void setName(String name){
        this.name=name;
    }

    public Double getPrice(){
        return this.price;
    }

    public void setPrice(Double price){
        this.price=price;
    }

    public int getQuantity(){
        return this.quantity;
    }

    public void setQuantity(int quantity){
        this.quantity=quantity;
    }

    public Store getStore(){
        return this.store;
    }

    public void setStore(Store store){
        this.store=store;
    }
}
