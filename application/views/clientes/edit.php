<?php $this->load->view('layout/siderbar'); ?>

<!-- Main Content -->
<div id="content">

    <?php $this->load->view('layout/navbar'); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url('clientes'); ?>">Clientes</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $titulo ?></li>
            </ol>
        </nav>

        <!-- DataTales Example --> 
        <!-- Esse card tem 12 colunas ou seja, dar pra colocar 3 campos de mb-4  que o total dar mb-12 -->

        <div class="card shadow mb-4">
            <!-- Esse card tem 12 colunas ou seja, dar pra colocar 3 campos de mb-4  que o total dar mb-12 -->
            <div class="card-body">
                <form class="user" method="POST" name="form_edit">

                    <fieldset class="mt-4 border p-2">
                        <legend class="font-small"><i class="fas fa-user-tie"></i>&nbsp;Dados pessoais</legend>
                        <!-- =============================================PRIMEIRA LINHA================================================== -->  
                        <div class="form-group row mb-3">
                            <!--MB margem boot a distancia entre as linhas-->

                            <div class="col-md-5 mb-3">
                                <label>Nome</label>
                                <!-- name="first_name" nome da coluna do BD -->    
                                <!-- value="php echo $cliente->first_name ">    
                                informação vinda do banco 
                                -->
                                <input type="text" class="form-control form-control-user" 

                                       name="cliente_nome" placeholder="Nome do cliente" 

                                       value="<?php echo $cliente->cliente_nome; ?>">
                                       <?php echo form_error('cliente_nome', '<small class="form-text text-danger">', ' </small>'); ?>
                            </div>


                            <div class="col-md-5">
                                <label>Sobrenome</label>

                                <input type="text" class="form-control form-control-user" 
                                       name="cliente_sobrenome" placeholder="Sobrenome do cliente" 
                                       value="<?php echo $cliente->cliente_sobrenome; ?>">
                                       <?php echo form_error('cliente_sobrenome', '<small class="form-text text-danger">', ' </small>'); ?>
                                <div id="emailHelp" class="form-text"></div>
                            </div>

                            <div class="col-md-2">
                                <label>Data nascimento</label>
                                <input type="date" class="form-control form-control-user" 
                                       name="cliente_data_nascimento" 
                                       value="<?php echo $cliente->cliente_data_nascimento; ?>">
                                       <?php echo form_error('cliente_data_nascimento', '<small class="form-text text-danger">', ' </small>'); ?>
                                <div id="emailHelp" class="form-text"></div>
                            </div>
                            <!-- col-md-4 tamanho do campo de texto -->

                        </div>
                        <!-- =============================================FIM DA PRIMEIRA LINHA================================================== -->

                        <div class="form-group row mb-3">
                            <div class="col-md-3">
                                <label>CPF ou CNPJ</label>
                                <input type="text" class="form-control form-control-user cnpj" 
                                       name="cliente_cpf_cnpj" placeholder="CPF ou CNPJ" 
                                       value="<?php echo $cliente->cliente_cpf_cnpj; ?>">
                                       <?php echo form_error('cliente_cpf_cnpj', '<small class="form-text text-danger">', ' </small>'); ?>
                                <div id="emailHelp" class="form-text"></div>
                            </div>

                            <div class="col-md-3">
                                <label>RG ou I.E</label>
                                <input type="text" class="form-control form-control-user" 
                                       name="cliente_rg_ie" placeholder="RG ou I.E" 
                                       value="<?php echo $cliente->cliente_rg_ie; ?>">
                                       <?php echo form_error('cliente_rg_ie', '<small class="form-text text-danger">', ' </small>'); ?>
                                <div id="emailHelp" class="form-text"></div>
                            </div>

                            <div class="col-md-6">
                                <label>E-mail</label>
                                <input type="email" class="form-control form-control-user" 
                                       name="cliente_email" placeholder="E-mail do cliente" 
                                       value="<?php echo $cliente->cliente_email; ?>">
                                       <?php echo form_error('cliente_email', '<small class="form-text text-danger">', ' </small>'); ?>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <div class="col-md-6 mb-3">
                                <label>Telefone fixo</label>

                                <input type="text" class="form-control form-control-user sp_celphones" 
                                       name="cliente_telefone" placeholder="Telefone do cliente" 
                                       value="<?php echo $cliente->cliente_telefone; ?>">
                                       <?php echo form_error('cliente_telefone', '<small class="form-text text-danger">', ' </small>'); ?>
                                <div id="emailHelp" class="form-text"></div>
                            </div>

                            <!-- col-md-4 tamanho do campo de texto -->
                            <div class="col-md-6">
                                <label>Telefone Celular</label>
                                <input type="text" class="form-control form-control-user sp_celphones" 
                                       name="cliente_celular" placeholder="Celular do cliente" 
                                       value="<?php echo $cliente->cliente_celular; ?>">
                                       <?php echo form_error('cliente_celular', '<small class="form-text text-danger">', ' </small>'); ?>
                                <div id="emailHelp" class="form-text"></div>
                            </div>

                        </div>
                    </fieldset>

                    <fieldset class="mt-4 border p-2">
                        <legend class="font-small"><i class="fas fa-map-marker-alt"></i></i>&nbsp;Dados de endereço</legend>

                        <div class="form-group row mb-3">
                            <div class="col-md-6">
                                <label>Endereço</label>
                                <input type="text" class="form-control form-control-user cep" 
                                       name="cliente_endereco" placeholder="Endereço" 
                                       value="<?php echo $cliente->cliente_endereco; ?>">
                                       <?php echo form_error('cliente_endereco', '<small class="form-text text-danger">', ' </small>'); ?>
                                <div id="emailHelp" class="form-text"></div>
                            </div>

                            <div class="col-md-2">
                                <label>Número</label>
                                <input type="text" class="form-control form-control-user cep" 
                                       name="cliente_numero_endereco" placeholder="Número" 
                                       value="<?php echo $cliente->cliente_numero_endereco; ?>">
                                       <?php echo form_error('cliente_numero_endereco', '<small class="form-text text-danger">', ' </small>'); ?>
                                <div id="emailHelp" class="form-text"></div>
                            </div>

                            <div class="col-md-3">
                                <label>Complemento</label>
                                <input type="text" class="form-control form-control-user " 
                                       name="cliente_complemento" placeholder="Complemento" 
                                       value="<?php echo $cliente->cliente_complemento; ?>">
                                       <?php echo form_error('cliente_complemento', '<small class="form-text text-danger">', ' </small>'); ?>
                                <div id="emailHelp" class="form-text"></div>
                            </div> 

                        </div>

                        <div class="form-group row mb-3">
                            <div class="col-md-4">
                                <label>Bairro</label>
                                <input type="text" class="form-control form-control-user cep" 
                                       name="cliente_bairro" placeholder="Bairro" 
                                       value="<?php echo $cliente->cliente_bairro; ?>">
                                       <?php echo form_error('cliente_bairro', '<small class="form-text text-danger">', ' </small>'); ?>
                            </div>

                            <div class="col-md-2">
                                <label>CEP</label>
                                <input type="text" class="form-control form-control-user cep" 
                                       name="cliente_cep" placeholder="CEP" 
                                       value="<?php echo $cliente->cliente_cep; ?>">
                                       <?php echo form_error('cliente_cep', '<small class="form-text text-danger">', ' </small>'); ?>
                            </div>

                            <div class="col-md-5">
                                <label>Cidade</label>
                                <input type="text" class="form-control form-control-user" 
                                       name="cliente_cidade" placeholder="Cidade" 
                                       value="<?php echo $cliente->cliente_cidade; ?>">
                                       <?php echo form_error('cliente_cidade', '<small class="form-text text-danger">', ' </small>'); ?>
                            </div>

                            <div class="col-md-1">
                                <label>UF</label>
                                <input type="text" class="form-control form-control-user uf" 
                                       name="cliente_estado" placeholder="Estado" 
                                       value="<?php echo $cliente->cliente_estado; ?>">
                                       <?php echo form_error('cliente_estado', '<small class="form-text text-danger">', ' </small>'); ?>
                            </div>

                        </div>
                    </fieldset>

                    <fieldset class="mt-4 border p-2">
                        <legend class="font-small"><i class="fas fa-tools"></i></i></i>&nbsp;Configurações</legend>

                        <div class="form-group row">
                            <div class="col-md-4">
                                <label>Cliente Ativo</label>
                                <select class="form-control" name="cliente_ativo">
                                    <option value="0"<?php echo $cliente->cliente_ativo == 0 ? 'selected' : '' ?>>Não</option>
                                    <option value="1"<?php echo $cliente->cliente_ativo == 1 ? 'selected' : '' ?>>Sim</option>
                                </select>
                            </div> 

                            <div class="col-md-8">
                                <label>Observação</label>
                                <textarea class="form-control form-control-user" 
                                          name="cliente_obs" placeholder="Observação"><?php echo $cliente->cliente_obs; ?></textarea>
                                          <?php echo form_error('cliente_obs', '<small class="form-text text-danger">', ' </small>'); ?>
                                <div id="emailHelp" class="form-text"></div>
                            </div>
                        </div>
                    </fieldset>


                    <div class="form-group row">
                        <input type="hidden" name="cliente_tipo" value="<?php echo $cliente->cliente_tipo; ?>"/>
                        <input type="hidden" name="cliente_id" value="<?php echo $cliente->cliente_id; ?>"/>
                    </div>
                    <!--==========================================FIM DA QUARTA LINHA============================================== --> 
                    <button type="submit" class="btn btn-primary btn-sm">Salvar</button>

                    <!--CARREGA A URL BASE 
                    $config'base_url' = 'http://localhost/meus-projetos/system-vendas/usuarios';-->

                    <a title="Voltar" 
                       href="<?php echo base_url('clientes'); ?>" class="btn btn-success btn-sm ml-2">Voltar</a>
                </form>

            </div>

        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->