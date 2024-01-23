package com.example.Libreria.models;

import java.util.List;

import jakarta.persistence.*;


@Entity
@Table(name="authors")
public class Author {
    
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)

    private Long id;

    String nome;
    String b_date;
    String country;

    @OneToMany(mappedBy = "author", cascade = CascadeType.ALL)
    private List<Book> books;

    // Altri metodi, getter e setter

    public List<Book> getBooks() {
        return books;
    }

    public Author(String nome,String b_date,String country){
        this.nome=nome;
        this.b_date=b_date;
        this.country=country;
    }

    public Author(){}

    public Long getId(){
        return this.id;
    }

    public void setId(Long id){
        this.id=id;
    }

    public String getNome(){
        return this.nome;
    }

    public void setNome(String nome){
        this.nome=nome;
    }

    public String getB_date(){
        return this.b_date;
    }

    public void setB_date(String b_date){
        this.b_date=b_date;
    }

    public String getCountry(){
        return this.country;
    }

    public void setCountry(String country){
        this.country=country;
    }

    

}
