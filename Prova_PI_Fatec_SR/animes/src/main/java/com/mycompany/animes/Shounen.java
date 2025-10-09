
package com.mycompany.animes;

public class Shounen extends Animes {
    
    //Atributos da minha subclasse Shounen
    
    private boolean aumentoDePoder;
    private boolean lancamento;
    
    public Shounen(String nome, int episodios, boolean aumentoDePoder, boolean lancamento) {
        super(nome, episodios, "Shounen");
        this.aumentoDePoder= aumentoDePoder;
        this.lancamento = lancamento;
    }
    
    
    // Getter e Setter específico da minha sub classe
    public boolean getAumentoDePoder() {
        return aumentoDePoder;
    }
    
    public boolean getLancamento() {
        return lancamento;
    }
    

    public void setAumentoDePoder(boolean aumentoDePoder) {
        this.aumentoDePoder = aumentoDePoder;
    }
    
    public void setLancamento(boolean Lancamento) {
        this.lancamento = lancamento;
    }
    
    // Reescrevendo método da superclasse Animes
    @Override
    public void exibirDetalhes() {
        super.exibirDetalhes();
        System.out.println("Gênero: Shounen" + (aumentoDePoder ? " - Com Aumento de Poder" : ""));
        System.out.println("Esta em Lancamento: " + lancamento);
    }
}
