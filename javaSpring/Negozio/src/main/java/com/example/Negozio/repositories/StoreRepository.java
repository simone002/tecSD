package com.example.Negozio.repositories;

import org.springframework.data.jpa.repository.JpaRepository;

import com.example.Negozio.models.Store;

public interface StoreRepository  extends JpaRepository<Store,Long>{
    
}
