package com.example.Libreria.controllers;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;

import com.example.Libreria.models.Author;
import com.example.Libreria.models.Book;
import com.example.Libreria.repositories.AuthorRepository;
import com.example.Libreria.repositories.BookRepository;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;





@Controller
public class BookController {
    
   final BookRepository repo;
   AuthorRepository repoA;

   public BookController(BookRepository repo,AuthorRepository repoA){
    this.repo=repo;
    this.repoA=repoA;
   }
   

   @GetMapping("/books")
   public String index(Model model) {
        model.addAttribute("books", repo.findAll());
        return "/books/index";
   }

   @GetMapping("/books/create")
   public String create() {
       return "/books/create";
   }

   @PostMapping("/books/store")
   public String store(Book book,@RequestParam String author_name){

       Author author=repoA.findByNome(author_name);
       book.setAuthor(author);
       repo.save(book);
       return "redirect:/books";
   }

   @GetMapping("/books/show")
   public String show(Model model,Long id) {
       model.addAttribute("book", repo.findById(id).orElse(null));
       Book book=repo.findById(id).orElse(null);
       model.addAttribute("author", repoA.findById(book.getId()).orElse(null));
       return "/books/show";
   }

   @GetMapping("/books/edit")
   public String edit(Model model,Long id) {
       model.addAttribute("book", repo.findById(id).orElse(null));
       Book book=repo.findById(id).orElse(null);
       model.addAttribute("author", repoA.findById(book.getId()).orElse(null));
       return "/books/edit";
   }

   @PostMapping("/books/update")
   public String update(Book book) {
       repo.save(book);
       return "redirect:/books";
   }

   @PostMapping("/books/delete")
   public String delete(Long id) {
       repo.deleteById(id);
       return "redirect:/books";
   }

   @PostMapping("/books/maggiora")
   public String maggiora(Long id) {
    Book book=repo.findById(id).orElse(null);
    book.setPrezzo(book.getPrezzo()+book.getPrezzo()*10/100);
    repo.save(book);
    return "redirect:/books";
   }
   
}
