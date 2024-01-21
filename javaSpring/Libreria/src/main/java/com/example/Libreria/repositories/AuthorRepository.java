package com.example.Libreria.repositories;

import org.springframework.data.jpa.repository.JpaRepository;
import com.example.Libreria.models.Author;

public interface AuthorRepository extends JpaRepository<Author,Long> {
    
}
