
package com.mycompany.animes;

public class TestaAnimes {


    public static void main(String[] args) {
           
        // Criando animes
        Animes animeGenerico = new Animes();
        Shounen dragonBall = new Shounen("Dragon Ball Z", 291, true, true);
        Shounen hajimeNoIppo = new Shounen("Hajime no Ippo",76 , false, false);
        Isekai swordArt = new Isekai("Sword Art Online", 96, "Aincrad", false);
        
        // Usando métodos
        animeGenerico.exibirDetalhes();
        System.out.println("-----");
        
        
        // Mundo mundo Shounen com poder
        dragonBall.exibirDetalhes(); 
        dragonBall.adicionarEpisodios(10); // Sobrecarga
        System.out.println("Episódios atualizados: " + dragonBall.getEpisodios());
        System.out.println("-----");
        
        // Mundo mundo Shounen sem poder
        hajimeNoIppo.exibirDetalhes(); 
        System.out.println("-----");
        
        // Mundo Isekai 
        swordArt.exibirDetalhes(); 
        swordArt.setMundoAlternativo("Alfheim Online"); 
        System.out.println("Novo mundo: " + swordArt.getMundoAlternativo()); 
    }
}
