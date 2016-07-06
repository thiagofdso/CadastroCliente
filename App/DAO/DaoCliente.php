<?php
namespace App\DAO;
   use App\SQL\Conexao;
   use App\Models\Cliente;
   use App\Models\TipoCliente\ClientePessoaFisica;
   use App\Models\TipoCliente\ClientePessoaJuridica;

  class DaoCliente {
	
      public static $instance;
   
      public function __construct() {
          //
      }
   
      public static function getInstance() {
          if (!isset(self::$instance))
              self::$instance = new DaoUsuario();
   
          return self::$instance;
      }

      /**
       * @return mixed
       */
   public function getNextID() {
          try {
              $sql = "SELECT AUTO_INCREMENT FROM information_schema.tables
                        WHERE table_name = DATABASE() AND table_schema = 'cadcliente'";
              $result = Conexao::getInstance()->query($sql);
              $final_result = $result->fetch(\PDO::FETCH_ASSOC);
              return $final_result['Auto_increment'];
          } catch (Exception $e) {
              print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
          }
      }



      public function Inserir(Cliente $cliente) {
          try {
              $sql = "INSERT INTO cadcliente.cliente (
				  tipo,
                  nome,
                  empresa,
				  sexo,
				  idade,
				  data_nascimento,
				  documento,
				  telefone,
				  endereco,
				  endereco_cobranca,
                  email
                  )
                  VALUES (
				  :tipo,
                  :nome,
                  :empresa,
				  :sexo,
				  :idade,
				  :data_nascimento,
				  :documento,
				  :telefone,
				  :endereco,
				  :endereco_cobranca,
                  :email
                  )";
   
              $p_sql = Conexao::getInstance()->prepare($sql);
			  if($cliente instanceof ClientePessoaFisica){
				$p_sql->bindValue(":tipo", 1);
                  if($cliente->getEnderecoEspecifico()!='')
				     $p_sql->bindValue(":endereco_cobranca",$cliente->getEnderecoEspecifico());
                  else
                      $p_sql->bindValue(":endereco_cobranca",'NULL');
                  $p_sql->bindValue(":empresa", 'NULL');
			  }
			  else if($cliente instanceof ClientePessoaJuridica){
                $p_sql->bindValue(":empresa", $cliente->getEmpresa());
				$p_sql->bindValue(":tipo", 2);
                  if($cliente->getEnderecoEspecifico()!='')
                      $p_sql->bindValue(":endereco_cobranca",$cliente->getEnderecoEspecifico());
                  else
                      $p_sql->bindValue(":endereco_cobranca",'NULL');
			  }

              $p_sql->bindValue(":nome", $cliente->getNome());
              $p_sql->bindValue(":sexo", $cliente->getSexo());
              $p_sql->bindValue(":idade", $cliente->getIdade());
              $data = strtotime($cliente->getDatanasc());
              $p_sql->bindValue(":data_nascimento", date("Y-m-d H:i:s", $data));
              $p_sql->bindValue(":documento", $cliente->getDocumento());
			  $p_sql->bindValue(":telefone", $cliente->getTelefone());
			  $p_sql->bindValue(":endereco", $cliente->getEndereco());
			  
			  $p_sql->bindValue(":email", $cliente->getEmail());

   
   
              return $p_sql->execute();
          } catch (Exception $e) {
              print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
          }
      }
   
      public function Editar(Cliente $cliente) {
          try {
              $sql = "UPDATE cadcliente.cliente set
                  nome=:nome,
                  tipo=:tipo,
                  empresa=:empresa,
				  sexo=:sexo,
				  idade=:idade,
				  data_nascimento=:data_nascimento,
				  documento=:documento,
				  telefone=:telefone,
				  endereco=:endereco,
				  endereco_cobranca=:endereco_cobranca,
                  email=:email 
                  WHERE id = :id";
   
              $p_sql = Conexao::getInstance()->prepare($sql);

              if($cliente instanceof ClientePessoaFisica){
                  $p_sql->bindValue(":tipo", 1);
                  if($cliente->getEnderecoEspecifico()!='')
                      $p_sql->bindValue(":endereco_cobranca",$cliente->getEnderecoEspecifico());
                  else
                      $p_sql->bindValue(":endereco_cobranca",'NULL');
                  $p_sql->bindValue(":empresa", 'NULL');
              }
              else if($cliente instanceof ClientePessoaJuridica){
                  $p_sql->bindValue(":empresa", $cliente->getEmpresa());
                  $p_sql->bindValue(":tipo", 2);
                  if($cliente->getEnderecoEspecifico()!='')
                      $p_sql->bindValue(":endereco_cobranca",$cliente->getEnderecoEspecifico());
                  else
                      $p_sql->bindValue(":endereco_cobranca",'NULL');
              }

              $p_sql->bindValue(":nome", $cliente->getNome());
              $p_sql->bindValue(":sexo", $cliente->getSexo());
              $p_sql->bindValue(":idade", $cliente->getIdade());
              $data = strtotime($cliente->getDatanasc());
              $p_sql->bindValue(":data_nascimento", date("Y-m-d H:i:s", $data));
              $p_sql->bindValue(":documento", $cliente->getDocumento());
              $p_sql->bindValue(":telefone", $cliente->getTelefone());
              $p_sql->bindValue(":endereco", $cliente->getEndereco());

              $p_sql->bindValue(":email", $cliente->getEmail());
              $p_sql->bindValue(":id", $cliente->getId());
              return $p_sql->execute();
          } catch (\Exception $e) {
              print $e;
              print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
          }
      }

    public function get($id){
        try {
            $sql = "SELECT * FROM cadcliente.cliente where id=:id";
            $p_sql = Conexao::getInstance()->prepare($sql);
            $p_sql->bindValue(":id", $id);
            $p_sql->execute();
            $data= $p_sql->fetch();
            $cliente=null;
            $cliente=$this->populaCliente($data);
            return $cliente;
        } catch (\Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
        }
    }
      public function all(){
          try {
              $sql = "SELECT * FROM cadcliente.cliente";
              $result = Conexao::getInstance()->query($sql);
              $clientes = array();
              $data = $result->fetchAll();
              foreach ($data as $row){
                  $clientes[]=$this->populaCliente($row);
              }
              return $clientes;
          } catch (Exception $e) {
              print "Ocorreu um erro ao tentar executar esta ação, foi gerado um LOG do mesmo, tente novamente mais tarde.";
          }
      }
      public function Deletar($id) {
          try {
              $sql = "DELETE FROM cadcliente.cliente WHERE id = :id";
              $p_sql = Conexao::getInstance()->prepare($sql);
              $p_sql->bindValue(":id", $id);
   
              return $p_sql->execute();
          } catch (\Exception $e) {
              print "Ocorreu um erro ao tentar executar esta açãoo, foi gerado um LOG do mesmo, tente novamente mais tarde.";
          }
      }

      public function populaCliente($row) {
          if($row['tipo']=='1')
            $pojo = new ClientePessoaFisica($row['nome'],$row['sexo'],$row['idade'],$row['data_nascimento'],
                $row['documento'],$row['telefone'],$row['endereco'],$row['email']);
          else
            $pojo = new ClientePessoaJuridica($row['empresa'],$row['nome'],$row['sexo'],$row['idade'],$row['data_nascimento'],
                $row['documento'],$row['telefone'],$row['endereco'],$row['email']);
          if(isset($row['id']))
            $pojo->setId($row['id']);
          if($row['endereco_cobranca'])
              $pojo->setEnderecoEspecifico($row['endereco_cobranca']);
          return $pojo;
      }
   
  }
  ?>