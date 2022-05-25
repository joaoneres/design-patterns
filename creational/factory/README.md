<h2>Factory Pattern</h2>

<p>Provê uma interface para criação de objetos em uma superclasse, mas permite que subclasses alterem o tipo de objetos que serão criados.</p>

<p>O método de fábrica sugere que você substitua as chamadas de construção de objeto direto (usando o operador new) com chamadas para um método de fábrica especial. Os objetos ainda serão criados pelo operador new, mas serão chamados com o método de fábrica. Objetos retornados por este método são muitas vezes chamados de “produtos”.</p>

<p>À primeira vista, essa mudança pode parecer inútil: acabamos de mover a chamada do construtor de uma parte do programa para outra. No entanto, considere o seguinte: agora você pode substituir o método fábrica em uma subclasse e alterar a classe de produtos que está sendo criada pelo método.</p>

<p>No entanto, há uma pequena limitação: as subclasses podem retornar diferentes tipos de produtos somente se esses produtos tiverem uma classe base ou interface comum. Além disso, o método fábrica na classe base deve ter seu tipo de retorno declarado como essa interface.</p>