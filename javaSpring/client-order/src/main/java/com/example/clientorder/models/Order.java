package com.example.clientorder.models;

import jakarta.persistence.*;

@Entity
@Table(name="orders")
public class Order {
    
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)

    Long id;
    String object;

    @ManyToOne
    @JoinColumn(name = "client_id")
    private Client client_id;

    public Order(String object, Client client_id) {
        this.object = object;
        this.client_id = client_id;
    }

    public Order() {
    }

    public Long getId() {
        return id;
    }

    public void setId(Long id) {
        this.id = id;
    }

    public String getObject() {
        return object;
    }

    public void setObject(String object) {
        this.object = object;
    }

    public Client getClient_id() {
        return client_id;
    }

    public void setClient_id(Client client) {
        this.client_id = client;
    }   
}
