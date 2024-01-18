package com.example.books.model;

import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;

@Entity
public class Books {
    
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)

    private Long id;

    private String isbn;
    private String titolo;
    private String autore;
    private int prezzo;

    Books(){}

    Books(String isbn,String titolo,String autore,int prezzo){

        this.isbn=isbn;
        this.titolo=titolo;
        this.autore=autore;
        this.prezzo=prezzo;
    }

    public Long getId() {
        return id;
    }

    public void setId(Long id){
        this.id=id;
    }

    public String getIsbn(){
        return isbn;
    }

    public String getAutore(){
        return autore;
    }

    public String getTitolo(){
        return titolo;
    }

    public int getPrezzo(){
        return prezzo;
    }

    public void setIsbn(String isbn){
        this.isbn=isbn;
    }

    public void setAutore(String autore){
        this.autore=autore;
    }

    public void setTitolo(String titolo){
        this.titolo=titolo;
    }

    public void setPrezzo(int prezzo){
        this.prezzo=prezzo;
    }



}
