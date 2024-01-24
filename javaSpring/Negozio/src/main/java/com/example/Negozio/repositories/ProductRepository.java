package com.example.Negozio.repositories;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Modifying;
import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.query.Param;
import org.springframework.transaction.annotation.Transactional;

import com.example.Negozio.models.Product;

public interface ProductRepository extends JpaRepository<Product,Long>{
    
    @Transactional
    @Modifying
    @Query("UPDATE Product p SET p.quantity = p.quantity - 1 WHERE p.id = :id and p.quantity>0")
    void decrementQuantity(@Param("id") Long id);

    default void decrementQuantity2(Long id) {

        Product p=findById(id).orElse(null);
        if(p.getQuantity()>0){
            p.setQuantity(p.getQuantity()-1);
            save(p);
        }
    }

    default void decrementQuantity1(Long id){
        findById(id).ifPresent(product -> {
            if (product.getQuantity() > 0) {
                product.setQuantity(product.getQuantity() - 1);
                save(product);
            }
        });
    }
}
