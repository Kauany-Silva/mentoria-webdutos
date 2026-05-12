# Mentoria WebDutos

Repositório destinado a testes, estudos e desafios da mentoria com a WebDutos.

---

# Comandos Git Utilizados

## Inicializar repositório

```bash
git init
```

Inicializa um novo repositório Git na pasta atual.

---

## Visualizar arquivos modificados

```bash
git status
```

Mostra os arquivos alterados, adicionados ou não rastreados.

---

## Registrar alterações

Adicionar todos os arquivos:

```bash
git add .
```

Adicionar um arquivo específico:

```bash
git add nome_do_arquivo
```

---

## Criar commit

```bash
git commit -m "mensagem"
```

### Exemplo de como é mais utilizado

```bash
git commit -m "feat: corrige bug"
```

Utilize mensagens claras e no tempo verbal imperativo.

---

## Visualizar histórico de commits

```bash
git log
```

Exibe o histórico de alterações do repositório.

---

# GitHub

Plataforma de hospedagem de código-fonte e desenvolvimento colaborativo.

## Outras plataformas semelhantes

- GitLab
- Bitbucket

---

# Atualizar repositório

## Baixar alterações do repositório remoto

```bash
git pull
```

Forçar atualização:

```bash
git pull --force
```

---

## Enviar alterações para o GitHub

```bash
git push
```

---

# Branches

Branches são linhas de desenvolvimento paralelas e independentes.

Elas permitem:

- corrigir bugs;
- testar funcionalidades;
- criar novas ideias sem afetar o código principal.

Depois, tudo pode ser unido através do **merge**.

---

## Criar uma nova branch

```bash
git checkout -b nome_da_branch
```

---

## Trocar de branch

```bash
git switch nome_da_branch
```

---

## Fazer merge entre branches

```bash
git merge nome_da_branch
```

Une as alterações de uma branch na branch atual.

---

# Objetivo do Repositório

Este repositório foi criado para:

- praticar comandos Git;
- aprender fluxo de versionamento;
- testar branches e merges;
- desenvolver habilidades em colaboração e organização de código.

---

# Observações

Este projeto possui fins educacionais e faz parte da mentoria da WebDutos.