package com.example.Negozio.models;

import jakarta.persistence.*;
import java.util.*;

@Entity
@Table (name="stores")
public class Store {

    @Id
    @GeneratedValue(strategy=GenerationType.IDENTITY)

    private Long id;

    String name;
    String city;

    @OneToMany(mappedBy = "store", cascade = CascadeType.ALL)
    private List<Product>products;

    public List<Product> getProducts(){
        return this.products;
    }

    public Store(String name,String city){
        this.name=name;
        this.city=city;
    }

    public Store(){}

    public Long getId(){
        return id;
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

    public String getCity(){
        return this.city;
    }

    public void setCity(String city){
        this.city=city;
    }
    
}
