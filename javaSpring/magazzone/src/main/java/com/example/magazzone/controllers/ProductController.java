package com.example.magazzone.controllers;

import org.springframework.stereotype.Controller; //
import org.springframework.ui.Model; //

import com.example.magazzone.repositories.ProductRepository; //
import com.fasterxml.jackson.annotation.JsonCreator.Mode;

import org.springframework.web.bind.annotation.GetMapping;//
import org.springframework.web.bind.annotation.RequestParam;//

import com.example.magazzone.models.Product;
import com.example.magazzone.repositories.ProductRepository;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;



@Controller

public class ProductController {
    
    private final ProductRepository repo;

    public ProductController(ProductRepository repo){
        this.repo=repo;
    }

    @GetMapping("/")
    public String index(Model model) {
        model.addAttribute("products",repo.findAll());
        return "index";
    }

    @GetMapping("/create")
    public String create() {
        return "create";
    }

    @GetMapping("/filter")
    public String filter(Model model,String action) {
        if (action.equals("filter")){
            model.addAttribute("products", repo.findByGiacenzaGreaterThan(0));
            return "filter";
        }else if (action.equals("unfilter")){

        }
        return "redirect:/";
    }
    

    @PostMapping("/store")
    public String store(Product product) {
        repo.save(product);
        return "redirect:/";
    }

    @GetMapping("/show")
    public String show(Model model,Long id){
        model.addAttribute("product", repo.findById(id).orElse(null));
        return "show";
    }

    @GetMapping("/edit")
    public String edit(Model model, Long id) {
        model.addAttribute("product", repo.findById(id).orElse(null));
        return "edit";
    }

    @PostMapping("/update")
    public String update(Product product) {
        repo.save(product);
        return "redirect:/";
    }

    @PostMapping("/delete")
    public String delete(@RequestParam Long id) {
        repo.deleteById(id);
        return "redirect:/";
    }
    
}
