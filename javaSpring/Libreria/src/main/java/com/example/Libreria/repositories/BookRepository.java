package com.example.Libreria.repositories;

import org.springframework.data.jpa.repository.JpaRepository;

import com.example.Libreria.models.Book;

public interface BookRepository extends JpaRepository<Book,Long> {
    
}
