BEGIN;
    CREATE TABLE genero(
        id SERIAL NOT NULL PRIMARY KEY UNIQUE,
        nome VARCHAR(255) UNIQUE,
        nome_abrev VARCHAR(255) UNIQUE
    );
    
    CREATE TABLE nivel_funcional(
        id SERIAL NOT NULL PRIMARY KEY UNIQUE,
        nome VARCHAR(255) UNIQUE,
        nome_abrev VARCHAR(255) UNIQUE
    );
    INSERT INTO nivel_funcional VALUES
    (DEFAULT,'Soldado','Sd'),
    (DEFAULT,'Cabo','Cb'),
    (DEFAULT,'Taifeiro-mor','TM'),
    (DEFAULT,'Taifeiro-de-primeira-classe','T1'),
    (DEFAULT,'Taifeiro-de-segunda-classe','T2'),
    (DEFAULT,'Terceiro-Sargento','3º Sgt'),
    (DEFAULT,'Segundo-Sargento','2º Sgt'),
    (DEFAULT,'Primeiro-Sargento','1º Sgt'),
    (DEFAULT,'Subtenente','S Ten'),
    (DEFAULT,'Cadete','Cad'),
    (DEFAULT,'1º Tenente','1º Ten'),
    (DEFAULT,'2º Tenente','2º Ten'),
    (DEFAULT,'Capitão','Cap'),
    (DEFAULT,'Major','Maj'),
    (DEFAULT,'Tenente-Coronel','Ten Cel'),
    (DEFAULT,'Coronel','Cel'),
    (DEFAULT,'General-de-Brigada','Gen Bda'),
    (DEFAULT,'General-de-Divisão','Gen Div'),
    (DEFAULT,'General-de-Exército','Gen Ex'),
    (DEFAULT,'Servidor Civil','SC'),
    (DEFAULT,'Colaborador','Col');

    CREATE TABLE experiencia_profissional( --tabela que lista as habilidades (experiência funcional) de interesse
        id SERIAL NOT NULL PRIMARY KEY UNIQUE,
        nome VARCHAR(255) UNIQUE,
        nome_abrev VARCHAR(255) UNIQUE
    );

    CREATE TABLE organizacao( --tabela contento as organizações militares, por exemplo
        id SERIAL NOT NULL PRIMARY KEY UNIQUE,
        nome VARCHAR(255) UNIQUE,
        nome_abrev VARCHAR(255) UNIQUE
    );
    CREATE TABLE formacao( --tabela contento as organizações militares, por exemplo
        id SERIAL NOT NULL PRIMARY KEY UNIQUE,
        nome VARCHAR(255) UNIQUE,
        nome_abrev VARCHAR(255) UNIQUE
    );
    CREATE TABLE instituicao( --tabela contento as instituições em que foram realizados os cursos
        id SERIAL NOT NULL PRIMARY KEY UNIQUE,
        nome VARCHAR(255) UNIQUE,
        nome_abrev VARCHAR(255) UNIQUE
    );
    CREATE TABLE pais( 
        id SERIAL NOT NULL PRIMARY KEY UNIQUE,
        nome VARCHAR(255) UNIQUE,
        sigla VARCHAR(255) UNIQUE
    );
    CREATE TABLE unidade_federacao(--estado do pais
        id SERIAL NOT NULL PRIMARY KEY UNIQUE,
        nome VARCHAR(255) UNIQUE,
        sigla VARCHAR(255) UNIQUE,
        pais_id SMALLINT REFERENCES pais (id) NOT NULL
    );
    CREATE TABLE municipio(
        id SERIAL NOT NULL PRIMARY KEY UNIQUE,
        nome VARCHAR(255) UNIQUE,
        sigla VARCHAR(255) UNIQUE,
        unidade_federacao_id SMALLINT REFERENCES unidade_federacao (id) NOT NULL
    );
    CREATE TABLE bairro(
        id SERIAL NOT NULL PRIMARY KEY UNIQUE,
        nome VARCHAR(255) UNIQUE,
        sigla VARCHAR(255) UNIQUE,
        municipio_id SMALLINT REFERENCES municipio (id) NOT NULL
    );

    CREATE TABLE modalidade(--modalidade do curso referido ex. PCE/CN, Exterior
        id SERIAL NOT NULL PRIMARY KEY UNIQUE,
        nome VARCHAR(255) UNIQUE
    );
    CREATE TABLE atividade(--lista de atividades previstas em calendário.. curso postgres, curso linux, etc
        id SERIAL NOT NULL PRIMARY KEY UNIQUE,
        codigo VARCHAR(255) UNIQUE,
        nome VARCHAR(255) UNIQUE,
        idioma VARCHAR(255)
    );

--    CREATE TABLE idioma(
--       id SERIAL NOT NULL PRIMARY KEY UNIQUE,
--        nome VARCHAR(255) UNIQUE,
--        nome_abrev VARCHAR(255) UNIQUE
--    );
    CREATE TABLE condecoracao(--registro de medalhas e condecoracoes
        id SERIAL NOT NULL PRIMARY KEY UNIQUE,
        nome VARCHAR(255) UNIQUE,
        nome_abrev VARCHAR(255) UNIQUE
    );
    CREATE TABLE contato(--lista de contatos possiveis, ex. whatsapp, telefone,email
        id serial NOT NULL PRIMARY KEY UNIQUE,
        nome VARCHAR(255)
    );
    
    CREATE TABLE pessoa(
        id SERIAL NOT NULL PRIMARY KEY UNIQUE,
        nome VARCHAR(255),
        nome_guerra VARCHAR(255),
        cpf VARCHAR(255) UNIQUE,
        nivel_funcional_id SMALLINT REFERENCES nivel_funcional (id) NOT NULL,
        organizacao_id SMALLINT REFERENCES organizacao (id) NOT NULL,--organizacao para a qual a pessoa trabalha
        genero_id SMALLINT REFERENCES genero (id) NOT NULL,
        formacao_id SMALLINT REFERENCES formacao (id) NOT NULL,
        data_nascimento DATE,
        endereco VARCHAR(255),
        numero VARCHAR(255),
        complemento VARCHAR(255),
        cep VARCHAR(255),
        bairro_id SMALLINT REFERENCES bairro (id),
        municipio_id SMALLINT REFERENCES municipio(id),
        obervacao TEXT,
        ativa BOOLEAN DEFAULT TRUE,--SERVIÇO ATIVO OU RESERVA
        created_at timestamp,
        updated_at timestamp
    );
    CREATE TABLE logon(--tabela para usuarios com acesso ao sistema
        id SERIAL NOT NULL PRIMARY KEY UNIQUE,
        pessoa_id INTEGER REFERENCES pessoa (id),
        nivel_acesso INTEGER, --0 BLOQUEADO,1 USUARIO COMUM, 2 ACESSO DE EMPRESAS, 3 ACESSO DE CARTORIOS, 5 ACESSO ADMINISTRDOR
        senha VARCHAR(255),
        created_at TIMESTAMP,
        updated_at TIMESTAMP
    );

    CREATE TABLE pessoa_atividade(
        id SERIAL NOT NULL PRIMARY KEY UNIQUE,
        pessoa_id INTEGER REFERENCES pessoa (id) NOT NULL,
        modalidade_id INTEGER REFERENCES modalidade (id),
        atividade_id INTEGER REFERENCES atividade (id),
        instituicao_id INTEGER REFERENCES instituicao (id),
        custo_atividade NUMERIC(18,2),
        bi VARCHAR(255),
        --idioma_id INTEGER REFERENCES idioma (id),
        municipio_id INTEGER REFERENCES municipio (id),
        ano DATE,
        carga_horaria SMALLINT,
        created_at timestamp,
        updated_at timestamp
    );
    CREATE TABLE pessoa_contato(
        id SERIAL PRIMARY KEY,
        pessoa_id INTEGER NOT NULL REFERENCES pessoa (id),
        contato_id INTEGER NOT NULL REFERENCES contato (id),
        valor VARCHAR(255), --ex. nome@dominio.com
        created_at TIMESTAMP,
        updated_at TIMESTAMP
    );
    
    CREATE TABLE pessoa_condecoracao(
        id SERIAL PRIMARY KEY,
        pessoa_id INTEGER NOT NULL REFERENCES pessoa (id),
        condecoracao_id INTEGER NOT NULL REFERENCES condecoracao (id),
        data_indicacao DATE,
        data_condecoracao DATE,
        created_at TIMESTAMP,
        updated_at TIMESTAMP
    );

    CREATE TABLE pessoa_experiencia_profissional(
        id SERIAL PRIMARY KEY,
        pessoa_id INTEGER NOT NULL REFERENCES pessoa (id),
        experiencia_profissional_id INTEGER NOT NULL REFERENCES experiencia_profissional (id),
        data_inicio DATE,
        data_fim DATE DEFAULT NULL,
        observacao TEXT,
        created_at TIMESTAMP,
        updated_at TIMESTAMP
    );
-- ##############################################################################################################################    
-- MERITOS
    CREATE TABLE promocoes (
        id SERIAL PRIMARY KEY,
        pessoa_id INTEGER NOT NULL REFERENCES pessoa (id),
        tipo_da_promocao VARCHAR(20),
        posto_graduacao_id SMALLINT REFERENCES nivel_funcional (id),
        data_promocao DATE,
        documento_de_promocao VARCHAR(255)        
    );
    
    CREATE TABLE elogios_citacoes_de_merito (
        id SERIAL PRIMARY KEY,
        pessoa_id INTEGER NOT NULL REFERENCES pessoa (id),
        descricao VARCHAR
    );
    
    CREATE TABLE trabalho_util (
        id SERIAL PRIMARY KEY,
        pessoa_id INTEGER NOT NULL REFERENCES pessoa (id),
        tipo VARCHAR(255),
        mencao VARCHAR(10)
    );  
-- #############################################################################################################################
--     DEMERITOS
    CREATE TABLE 


    GRANT ALL ON TABLE experiencia_profissional TO public;
    GRANT ALL ON TABLE pessoa_experiencia_profissional TO public;
    GRANT ALL ON TABLE pessoa_atividade TO public;
    GRANT ALL ON TABLE bairro TO public;
    GRANT ALL ON TABLE formacao TO public;
    GRANT ALL ON TABLE genero TO public;
    GRANT ALL ON TABLE nivel_funcional TO public;
    GRANT ALL ON TABLE organizacao TO public;
    GRANT ALL ON TABLE instituicao TO public;
    GRANT ALL ON TABLE contato TO public;
    GRANT ALL ON TABLE pais TO public;
    GRANT ALL ON TABLE unidade_federacao TO public;
    GRANT ALL ON TABLE municipio TO public;
    GRANT ALL ON TABLE modalidade TO public;
    GRANT ALL ON TABLE atividade TO public;
    GRANT ALL ON TABLE pessoa TO public;
    GRANT ALL ON TABLE pessoa_contato TO public;
    GRANT ALL ON TABLE pessoa_condecoracao TO public;


    GRANT ALL ON ALL SEQUENCES IN SCHEMA public TO public;
COMMIT;
