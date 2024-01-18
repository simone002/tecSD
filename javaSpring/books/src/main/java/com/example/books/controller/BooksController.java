package com.example.books.controller;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping; // non si auto aggiunge
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.ui.Model;// non si auto aggiunge

import com.example.books.model.Books;
import com.example.books.repository.BookRepository;

@Controller
public class BooksController {

    private final BookRepository repo;

    public BooksController(BookRepository repo){
        this.repo=repo;
    }

    //Home

    @GetMapping("/")
    public String index(){
        return "index";
    }

    //read
    @GetMapping("/read")
    public String read(Model model){
        model.addAttribute("books", repo.findAll());
        return "read";
    }
    
    //insert 
    @PostMapping("/insert")
    public String insert(Books book){
        repo.save(book);
        return "redirect:/read";
    }

    @PostMapping("/form")
    public String form(@RequestParam String action,@RequestParam Long id, Model model){

        if(action.equals("Modifica")){
            Books book=repo.findById(id).orElse(null);
            model.addAttribute("book", book);
            return "update";
        }
        if(action.equals("Rimuovi")){
            repo.deleteById(id);
            return "redirect:/read";
        }
        return "read";
    }

    @PostMapping("/update")
    public String update(Books book){
        repo.save(book);
        return "redirect:/read";
    }
    

}
