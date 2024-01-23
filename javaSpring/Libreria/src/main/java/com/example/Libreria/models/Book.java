package com.example.Libreria.models;

import jakarta.persistence.*;

@Entity
@Table(name="books")
public class Book {
    

    @Id
    @GeneratedValue(strategy=GenerationType.IDENTITY)
    private Long id;

    @ManyToOne
    @JoinColumn(name = "author_id")
    private Author author;

    String titolo;
    String anno;
    Double prezzo;

    public Book(String titolo,String anno,Double prezzo){
        this.titolo=titolo;
        this.anno=anno;
        this.prezzo=prezzo;
    }
    public Book(){}

    public Long getId(){
        return id;
    }

    public void setId(Long id){
        this.id=id;
    }

    public String getTitolo(){
        return this.titolo;
    }

    public void setTitolo(String titolo){
        this.titolo=titolo;
    }

    public String getAnno(){
        return this.anno;
    }

    public void setAnno(String anno){
        this.anno=anno;
    }

    public Double getPrezzo(){
        return this.prezzo;
    }

    public void setPrezzo(Double prezzo){
        this.prezzo=prezzo;
    }

    public Author getAuthor(){
        return this.author;
    }

    public void setAuthor(Author author){
        this.author=author;
    }
}


