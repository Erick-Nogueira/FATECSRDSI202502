
package com.mycompany.animes;

public class Isekai extends Animes{
    
    // Atributo Privado da minha subclasse
    private String mundoAlternativo;
    private boolean lancamento;
    
    public Isekai(String nome, int episodios, String mundoAlternativo, boolean lancamento) {
        super(nome, episodios, "Isekai");
        this.mundoAlternativo = mundoAlternativo;
        this.lancamento = lancamento;
    }
    
    // Getter
    public String getMundoAlternativo() {
        return mundoAlternativo;
    }
    
    public boolean getLancamento() {
        return lancamento;
    }
    
    // Setter
    public void setMundoAlternativo(String mundoAlternativo) {
        this.mundoAlternativo = mundoAlternativo;
    }
    
    public void setLancamento(boolean Lancamento) {
        this.lancamento = lancamento;
    }
    
    // Reescrevendo método da superclasse
    @Override
    public void exibirDetalhes() {
        super.exibirDetalhes();
        System.out.println("Mundo alternativo: " + mundoAlternativo);
        System.out.println("Esta em Lancamento: " + lancamento);
    }
}
