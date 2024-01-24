package com.example.Negozio.controllers;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;

import com.example.Negozio.models.Store;
import com.example.Negozio.repositories.StoreRepository;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;



@Controller
public class StoreController {
    
    StoreRepository repo;

    public StoreController(StoreRepository repo){
        this.repo=repo;
    }

    @GetMapping("/")
    public String home() {
        return "/index";
    }
    

    @GetMapping("/stores")
    public String index(Model model) {
        model.addAttribute("stores", repo.findAll());
        return "/stores/index";
    }

    @GetMapping("/stores/create")
    public String create() {
        return  "/stores/create";
    }

    @PostMapping("/stores/store")
    public String store(Store store) {
        repo.save(store);
        return "redirect:/stores";
    }  

    @GetMapping("/stores/show")
    public String show(Long id,Model model) {
        model.addAttribute("store", repo.findById(id).orElse(null));
        return "/stores/show";
    }

    @GetMapping("/stores/edit")
    public String edit(Long id,Model model) {
        model.addAttribute("store", repo.findById(id).orElse(null));
        return "/stores/edit";
    }

    @PostMapping("/stores/update")
    public String update(Store store) {
        repo.save(store);
        return "redirect:/stores";
    }

    @PostMapping("/stores/delete")
    public String delete(Long id) {
        repo.deleteById(id);       
        return "redirect:/stores";
    }
    
}
