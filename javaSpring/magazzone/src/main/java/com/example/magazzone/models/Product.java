package com.example.magazzone.models;

import jakarta.persistence.*; //

@Entity
@Table(name="prodotti")

public class Product {
    
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)

    private Long id;

    String nome_prodotto;
    Integer giacenza;
    Double prezzo;

    public Product(String nome_prodotto,Integer giacenza,Double prezzo){
        this.nome_prodotto=nome_prodotto;
        this.giacenza=giacenza;
        this.prezzo=prezzo;
    }

    public Product(){}

    public Long getId(){
        return this.id;

    }

    public String getNome_prodotto(){
        return this.nome_prodotto;
    }

    public Integer getGiacenza(){
        return this.giacenza;
    }

    public Double getPrezzo(){
        return this.prezzo;
    }

    public void setId(Long id){
        this.id=id;
    }

    public void setNome_prodotto(String nome_prodotto){
        this.nome_prodotto=nome_prodotto;
    }

    public void setGiacenza(Integer giacenza){
        this.giacenza=giacenza;
    }

    public void setPrezzo(Double prezzo){
        this.prezzo=prezzo;
    }

}
