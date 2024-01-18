package com.example.books.repository;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;
//importo il model

import com.example.books.model.Books;

@Repository
public interface BookRepository extends JpaRepository<Books,Long>{}
