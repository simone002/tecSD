package com.example.Libreria.controllers;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;

import com.example.Libreria.models.Author;
import com.example.Libreria.repositories.AuthorRepository;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.RequestBody;



@Controller
public class AuthorController {
    
    private final AuthorRepository repo;

    public AuthorController(AuthorRepository repo){
        this.repo=repo;
    }

    @GetMapping("/")
    public String index(Model model){

        model.addAttribute("authors",repo.findAll());
        return "index";
    }

    @GetMapping("/create")
    public String create(){
        return "create";
    }

    @PostMapping("/store")
    public String store(Author author){
        repo.save(author);
        return  "redirect:/";
    }

    @GetMapping("/show")
    public String show(Model model,Long id){
        model.addAttribute("author", repo.findById(id).orElse(null));
        return "show";
    }
    

    @GetMapping("/edit")
    public String edit(Model model,Long id) {
        model.addAttribute("author", repo.findById(id).orElse(null));
        return "edit";
    }

    @PostMapping("/update")
    public String update(Author author) {
        repo.save(author);
        return "redirect:/";
    }

    @PostMapping("/delete")
    public String delete(Long id) {
        
        repo.deleteById(id);
        return "redirect:/";
    }
    

}
