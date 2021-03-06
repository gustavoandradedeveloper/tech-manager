<?php $this->load->view('layout/siderbar'); ?>

<!-- Main Content -->
<div id="content">

    <?php $this->load->view('layout/navbar'); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('usuarios'); ?>">Usuários</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $titulo ?></li>
            </ol>
        </nav>

        <!-- DataTales Example --> 
        <!-- Esse card tem 12 colunas ou seja, dar pra colocar 3 campos de mb-4  que o total dar mb-12 -->

        <div class="card shadow mb-4">

            <div class="card-header py-3">           
                <!--CARREGA A URL BASE 
                $config'base_url' = 'http://localhost/meus-projetos/system-vendas/usuarios';-->
                <a title="Voltar" 
                   href="<?php echo base_url('usuarios'); ?>" class="btn btn-success btn-sm float-right">

                    <!-- icone mostrado -->
                    <i class="fas fa-arrow-left"></i>&nbsp Voltar</a>
            </div>

            <!-- Esse card tem 12 colunas ou seja, dar pra colocar 3 campos de mb-4  que o total dar mb-12 -->
            <div class="card-body">
                <form method="POST" name="form_add">
                    <!-- =============================================PRIMEIRA LINHA================================================== -->  
                    <div class="form-group row">

                        <div class="col-md-4">
                            <label>Nome</label>
                            <!-- name="first_name" nome da coluna do BD -->    
                            <!-- value="php echo $usuario->first_name "> 
                            informação vinda do banco 
                            -->
                            <input type="text" class="form-control" 
                                   name="first_name" phaceholder="Seu Nome" value="<?php echo set_value('first_name');?>">
                            <?php echo form_error('first_name', '<small class="form-text text-danger">', ' </small>'); ?>
                        </div>


                        <div class="col-md-4">
                            <label>Sobrenome</label>

                            <input type="text" class="form-control" 
                                   name="last_name" phaceholder="Seu sobrenome" value="<?php echo set_value('last_name');?>">
                                   <?php echo form_error('last_name', '<small class="form-text text-danger">', ' </small>'); ?>
                            <div id="emailHelp" class="form-text"></div>
                        </div>

                        <!-- col-md-4 tamanho do campo de texto -->
                        <div class="col-md-4">
                            <label>Email&nbsp;(Login)</label>
                            <input type="email" class="form-control" 
                                   name="email" phaceholder="Seu email (login)" 
                                   value="<?php echo set_value('email');?>">
                                   <?php echo form_error('email', '<small class="form-text text-danger">', ' </small>'); ?>
                            <div id="emailHelp" class="form-text"></div>
                        </div>
                    </div>
                    <!-- =============================================FIM DA PRIMEIRA LINHA================================================== -->  


                    <!-- =============================================SEGUNDA LINHA================================================== -->
                    <div class="form-group row">
                        <!-- col-md-4 tamanho do campo de texto -->

                        <div class="col-md-4">
                            <label>Usuário</label>
                            <input type="text" class="form-control" 
                                   name="username" phaceholder="Seu usuário" 
                                   value="<?php echo set_value('username');?>">
                                   <?php echo form_error('username', '<small class="form-text text-danger">', ' </small>'); ?>
                            <div id="emailHelp" class="form-text"></div>
                        </div>


                        <div class="col-md-4">
                            <label>Ativo</label>
                            <select class="form-control" name="active">
                                <!-- <option value="0">  Sim </option> INFORMAÇÃO ESTATICA-->
                                <!-- INFORMAÇÃO VINDA DO BANCO-->
                                <!-- PRINTANDO UM SELECTED DE ACORDO COM O PARAMETRO QUE ESTÁ NO BANCO DE DADOS EXEMPLO SE TIVER 1 NÃO ESTÁ ATIVO SE TIVER 2 ESTÁ ATIVO -->
                                <!-- SE O OBJETO $USUARIO NO PARAMETRO ACTIVE FOR IGUAL == 2 então ele não esta ativo se for igual a 1 ele está ativo **tabela** user --> 
                                <option value="2" >Não</option>
                                <option value="1">Sim</option>

                            </select>
                        </div>


                        <div class="col-md-4">
                            <label>Perfil de acesso</label>
                            <select class="form-control" name="perfil_usuario">

                                <!-- SE O OBJETO $USUARIO NO PARAMETRO na tabela user_group  FOR IGUAL == 2 então a pessoa é vendedor se for igual a 1 ele é administrador **tabela** user_group --> 
                                <option value="2">Vendedor</option>
                                <option value="1">Administrador</option>  
                            </select>
                        </div>
                    </div>
                    <!-- =============================================FIM DA SEGUNDA LINHA================================================== -->


                    <!-- =============================================TERCEIRA LINHA================================================== --> 

                    <div class="form-group row">
                        <!-- col-md-4 tamanho do campo de texto -->
                        <div class="col-md-6">
                            <label>Senha</label>
                            <input type="password" class="form-control" name="password" phaceholder="Sua senha">
                            <?php echo form_error('password', '<small class="form-text text-danger">', ' </small>'); ?>
                        </div>

                        <div class="col-md-6">
                            <label>Confirme sua senha</label>
                            <input type="password" class="form-control" name="confirm_password" phaceholder="Confirme sua senha">
                        </div>
                    </div>
                    <!-- =============================================TERCEIRA LINHA================================================== --> 

                    <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                </form>

            </div>

        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->