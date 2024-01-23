package com.example.clientorder.repositories;

import org.springframework.data.jpa.repository.JpaRepository;

import com.example.clientorder.models.Client;

public interface ClientRepository extends JpaRepository<Client, Long>{
    
}
