package com.example.clientorder.repositories;

import org.springframework.data.jpa.repository.JpaRepository;

import com.example.clientorder.models.Order;

public interface OrderRepository extends JpaRepository<Order, Long>{
    
}
