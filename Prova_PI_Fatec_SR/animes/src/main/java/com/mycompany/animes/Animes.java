
package com.mycompany.animes;
/*Super Classe*/
public class Animes { 
    
    //meus atributos privados da minha super classe
    private String nome;
    private int episodios;
    private String genero;

    
    //Construtores da minha super classe
    public Animes(){
        
        this.nome = "Sem nome";
        this.episodios = 0;
        this.genero = "Desconhecido";
    
    }
    
    public Animes(String nome, int episodios, String genero){
        
        this.nome = nome;
        this.episodios = episodios;
        this.genero = genero;
        
    }
    
    
    // getters e setters da  super classe
 
    public String getNome(){
        return nome;
    }
    
    public void setNome(String nome){
        this.nome = nome;
    }
    
    public int getEpisodios(){
        return episodios;
    }
    
    public void setEpisodios(int episodios){
        this.episodios = episodios;
    }
    
    public String getGenero(){
        return nome;
    }
    
    public void setGenero(String genero){
        this.genero = genero;
    }

    
    
    
    // Metodo que sera reescrito nas subclasse Shounem e Isekai
    
    void exibirDetalhes() {
        
        System.out.println("Anime: " + nome + " (" + episodios + " episódios)");
        
    }
   
    // Sobrecarga de método
    void adicionarEpisodio() {
        episodios++;
    }
    
    void adicionarEpisodios(int quantidade) {
        episodios += quantidade;
    }
}
