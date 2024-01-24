package com.example.Negozio.controllers;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestParam;

import com.example.Negozio.models.Product;
import com.example.Negozio.models.Store;
import com.example.Negozio.repositories.ProductRepository;
import com.example.Negozio.repositories.StoreRepository;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;



@Controller
public class ProductController {

    ProductRepository repo;
    StoreRepository repoS;

    public ProductController(ProductRepository repo,StoreRepository repoS){
        this.repo=repo;
        this.repoS=repoS;
    }

    @GetMapping("/products")
    public String index(Model model){
        model.addAttribute("products", repo.findAll());
        return "/products/index";
    }

    @GetMapping("/products/create")
    public String create(){
        return "/products/create";
    }

    @PostMapping("/products/store")
    public String store(Product p) {
    
        repo.save(p);
        return "redirect:/products";
    }

    @GetMapping("/products/show")
    public String show(Long id,Model model) {
        model.addAttribute("product", repo.findById(id).orElse(null));
        return "/products/show";
    }

    @GetMapping("/products/edit")
    public String edit(Long id,Model model) {
        model.addAttribute("product", repo.findById(id).orElse(null));
        return "/products/edit";
    }
    
    @PostMapping("/products/update")
    public String update(Product p) {
        repo.save(p);
        return "redirect:/products";
    }

    @PostMapping("/products/delete")
    public String delete(Long id) {
        repo.deleteById(id);
        return "redirect:/products";
    }

    @PostMapping("/products/compra")
    public String compra(Long id) {
        repo.decrementQuantity2(id);
        return "redirect:/products";
    }

    

}
