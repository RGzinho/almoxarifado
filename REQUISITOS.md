# Requisitos

### Funcionais
RF00: O sistema deve adicionar produtos ao estoque
RF01: O sistema deve mostrar a quantidade de produtos no estoque
RF02: O sistema deve mostrar caso algum produto esteja em falta
RF03: O sistema deve mostar os produtos, sua quantidade e nome
RF04: O sistema deve buscar os produtos através dos parâmetros: nome, categoria ou id
RF05: O sistema deve retornar a quantidade de produtos caso a movimentação seja cancelada
RF06: O sistema deve criar categorias para os produtos
RF07: O usuário deve ser capaz de filtrar os produtos pela categoria
RF08: O usuário deve ser capaz cadastrar produtos
RF09: O usuário deve ser capaz de fazer login no sistema
RF10: O usuário não deve ser capaz de movimentar uma quantidade de produtos maior que a em estoque
RF11: A quantidade de produtos não pode ser negativa
RF12: Os produtos devem ter uma descrição
RF13: Os produtos podem ser alterados pelo usuário
RF14: Os produtos devem ter uma categoria
RF15: Cada categoria deve ser diferente
RF16: Cada produto deve ter uma identificação única
RF17: A movimentação deve estar em estado de espera até ser confirmada
RF18: A confirmação vem do usuário
### Não-funcionais
RNF00: O sistema deve responder às pesquisas em menos de três segundos
RNF01: O sistema deve suportar até 1.000 usuários logados simultaneamente sem perda de performance.
RNF02: As operações de atualização de estoque (entrada e saída) devem ser processadas e persistidas no banco de dados em menos de 1 segundo.
RNF03: O sistema deve estar em conformidade com a LGPD (Lei Geral de Proteção de Dados) para o armazenamento de dados dos usuários cadastrados.
RNF04: Toda a comunicação entre o cliente (navegador/aplicativo) e o servidor deve ser criptografada utilizando o protocolo HTTPS (TLS 1.3).
RNF05: O sistema deve garantir uma taxa de disponibilidade (Uptime) de 99.7% ao mês.RNF06: Devem ser realizados backups automáticos e diários de todo o banco de dados do sistema, com retenção mínima de 30 dias.
RNF06: O sistema deve ser responsivo para os sistemas operacionais: 
* Windows(Versão: 7, 8, 10 e 11), 
* Android(Versão: 12, 13, 14, 15, 16 e 17), 
* iOS(Versão: 14, 15, 16, 17, 18, 19 e 20) e 
* macOS(Versão: 11, 12, 13, 14, 15 e 26)
RNF07:O sistema deve ter segurança: Criptografia de senhas, anti-sql injection, etc...
# Regras de negócio
RN01: O sistema deve impedir qualquer movimentação de saída que resulte em saldo menor que zero para um produto.
RN02: Dois produtos cadastrados não podem possuir o mesmo código identificador único (ID ou SKU).
RN03: Uma movimentação só pode ser cancelada se estiver no estado "Em Espera". Movimentações já confirmadas não podem ser desfeitas, apenas estornadas por uma nova movimentação.
RN04: Apenas usuários com perfil de "Administrador" ou "Gerente" podem criar novas categorias ou alterar preços e descrições de produtos.
RN05: Quando a quantidade de um produto atingir o limite mínimo estipulado no cadastro, o status do produto deve mudar automaticamente para "Estoque Baixo".
RN06: A sessão do usuário deve ser encerrada automaticamente após 15 minutos de inatividade por motivos de segurança.