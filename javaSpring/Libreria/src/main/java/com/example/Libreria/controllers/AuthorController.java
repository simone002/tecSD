package com.example.Libreria.controllers;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;

import com.example.Libreria.models.Author;
import com.example.Libreria.repositories.AuthorRepository;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;



@Controller
public class AuthorController {
    

    final AuthorRepository repo;
    

    public AuthorController(AuthorRepository repo){
        this.repo=repo;
    }

    @GetMapping("")
    public String home() {
        return "index";
    }
    

    @GetMapping("/authors")
    public String index(Model model) {
        model.addAttribute("authors",repo.findAll());
        return "authors/index";
    }

    @GetMapping("/authors/create")
    public String create() {
        return "/authors/create";
    }

    @PostMapping("/authors/store")
    public String store(Author a) {
        repo.save(a);
        return "redirect:/authors";
    }

    @GetMapping("/authors/show")
    public String show(Model model,Long id){
        model.addAttribute("author",repo.findById(id).orElse(null));
        return "/authors/show";
    }

    @GetMapping("/authors/edit")
    public String edit(Model model,Long id){
        model.addAttribute("author",repo.findById(id).orElse(null));
        return "/authors/edit";
    }
    
    @PostMapping("/authors/update")
    public String update(Author author){
        repo.save(author);
        return "redirect:/authors";
    }

    @PostMapping("/authors/delete")
    public String delete(Long id){
        repo.deleteById(id);
        return "redirect:/authors";
    }

}
