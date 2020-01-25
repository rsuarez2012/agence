@extends('layouts.app')
@section('content')
	<section class="content-header">
    <h1>
      Dashboard
      <small>Panel control</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3>150</h3>

            <p>New Orders</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <h3>53<sup style="font-size: 20px">%</sup></h3>

            <p>Bounce Rate</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3>44</h3>

            <p>User Registrations</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h3>65</h3>

            <p>Unique Visitors</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->
  </section>
  <div class="row">
        <div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Por Consultor</a></li>
              <li><a href="#tab_2" data-toggle="tab">Por Cliente</a></li>
              
              <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <form method="GET" action="">
                  <input type="hidden" name="_token" value="{{csrf_token()}}" id="signup-token">
                  
                  <table class="table" border="2">
                    <tr>
                      <td width="30" bgcolor="#efefef">Período</td>
                      <td bgcolor="#efefef">
                        <input type="date" name="desde" id="desde">
                        <font color="black">
                        <!--<select name="select5">
                          <option>Jan
                          <option>Fev
                          <option>Mar
                          <option>Abr
                          <option>Mai                        
                          <option>Jun
                          <option>Jul
                          <option>Ago
                          <option selected>Set 
                          <option>Out                          
                          <option>Nov
                          <option>Dez
                        </select>
                        <select name="select">
                          <option>2003
                          <option>2004
                          <option>2005</option>
                          <option>2006</option>
                          <option selected>2007</option>
                        </select>-->
                        a
                        <input type="date" name="hasta" id="hasta">
                        <!--<select name="select3">
                          <option>Jan
                          <option>Fev
                          <option>Mar
                          <option>Abr
                          <option>Mai                        
                          <option>Jun
                          <option>Jul
                          <option>Ago
                          <option selected>Set 
                          <option>Out                          
                          <option>Nov
                          <option>Dez
                        </select>
                        <select name="select4">
                          <option>2003
                          <option>2004
                          <option>2005</option>
                          <option>2006</option>
                          <option selected>2007</option>
                        </select>-->
                      </font>
                      </td>
                      <td rowspan="2">
                        <div align="center">
                          <br>
                          <br>
                          <br>
                          <br>
                          <input type="button" name="relatorio" value="Relatorio" id="relatorio_co">
                          <font color="black">
                              <form action="con_desem_consultor_rel.htm">
                                <input style="BORDER-RIGHT: 1px outset; BORDER-TOP: 1px outset; FONT-SIZE: 8pt; BACKGROUND-POSITION-Y: center; LEFT: 120px; BACKGROUND-IMAGE: url(img/icone_relatorio.png); BORDER-LEFT: 1px outset; WIDTH: 110px; BORDER-BOTTOM: 1px outset; BACKGROUND-REPEAT: no-repeat; FONT-FAMILY: Tahoma, Verdana, Arial; HEIGHT: 22px; BACKGROUND-COLOR: #CCCCCC" type="submit" value="Relat&oacute;rio" name="btSalvar22"/>
                              </form>
                              <form action="con_desem_consultor_graf.htm">
                                <input style="BORDER-RIGHT: 1px outset; BORDER-TOP: 1px outset; FONT-SIZE: 8pt; BACKGROUND-POSITION-Y: center; LEFT: 120px; BACKGROUND-IMAGE: url(img/icone_grafico.png); BORDER-LEFT: 1px outset; WIDTH: 110px; BORDER-BOTTOM: 1px outset; BACKGROUND-REPEAT: no-repeat; FONT-FAMILY: Tahoma, Verdana, Arial; HEIGHT: 22px; BACKGROUND-COLOR: #CCCCCC" type="submit" value="Gr&aacute;fico" name="btSalvar222" />
                              </form>
                              <form action="con_desem_consultor_pizza.htm">
                                <input style="BORDER-RIGHT: 1px outset; BORDER-TOP: 1px outset; FONT-SIZE: 8pt; BACKGROUND-POSITION-Y: center; LEFT: 120px; BACKGROUND-IMAGE: url(img/icone_pizza.png); BORDER-LEFT: 1px outset; WIDTH: 110px; BORDER-BOTTOM: 1px outset; BACKGROUND-REPEAT: no-repeat; FONT-FAMILY: Tahoma, Verdana, Arial; HEIGHT: 22px; BACKGROUND-COLOR: #CCCCCC" type="submit" value="Pizza" name="btSalvar222" />
                              </form>
                            </font>
                          </div>
                      </td>

                    </tr>
                    <tr>
                      <td bgcolor="#efefef">Consultores</td>
                      <td>
                        <select multiple="multiple" id="my-select" name="my-select[]" multiple="multiple">
                          @foreach($caos as $cao)
                            <option value='{{$cao->co_usuario}}'>{{$cao->no_usuario}}</option>

                          @endforeach
                        </select>
                      </td>
                    </tr>
                  </table>
                </form>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                <table class="table" border="2">
                  <tr>
                    <td width="30" bgcolor="#efefef">Período</td>
                    <td bgcolor="#efefef">
                      <font color="black">
                      <select name="select5">
                        <option>Jan
                        <option>Fev
                        <option>Mar
                        <option>Abr
                        <option>Mai                        
                        <option>Jun
                        <option>Jul
                        <option>Ago
                        <option selected>Set 
                        <option>Out                          
                        <option>Nov
                        <option>Dez
                      </select>
                      <select name="select">
                        <option>2003
                        <option>2004
                        <option>2005</option>
                                    <option>2006</option>
                                    <option selected>2007</option>
                      </select>
                      a
                      <select name="select3">
                        <option>Jan
                        <option>Fev
                        <option>Mar
                        <option>Abr
                        <option>Mai                        
                        <option>Jun
                        <option>Jul
                        <option>Ago
                        <option selected>Set 
                        <option>Out                          
                        <option>Nov
                        <option>Dez
                      </select>
                      <select name="select4">
                        <option>2003
                        <option>2004
                        <option>2005</option>
                        <option>2006</option>
                        <option selected>2007</option>
                      </select>
                    </font>
                    </td>
                    <td rowspan="2">
                      <div align="center">
                        <br>
                        <br>
                        <br>
                        <br>
                        <font color="black">
                            <form action="con_desem_consultor_rel.htm">
                              <input style="BORDER-RIGHT: 1px outset; BORDER-TOP: 1px outset; FONT-SIZE: 8pt; BACKGROUND-POSITION-Y: center; LEFT: 120px; BACKGROUND-IMAGE: url(img/icone_relatorio.png); BORDER-LEFT: 1px outset; WIDTH: 110px; BORDER-BOTTOM: 1px outset; BACKGROUND-REPEAT: no-repeat; FONT-FAMILY: Tahoma, Verdana, Arial; HEIGHT: 22px; BACKGROUND-COLOR: #CCCCCC" type="submit" value="Relat&oacute;rio" name="btSalvar22"/>
                            </form>
                            <form action="con_desem_consultor_graf.htm">
                              <input style="BORDER-RIGHT: 1px outset; BORDER-TOP: 1px outset; FONT-SIZE: 8pt; BACKGROUND-POSITION-Y: center; LEFT: 120px; BACKGROUND-IMAGE: url(img/icone_grafico.png); BORDER-LEFT: 1px outset; WIDTH: 110px; BORDER-BOTTOM: 1px outset; BACKGROUND-REPEAT: no-repeat; FONT-FAMILY: Tahoma, Verdana, Arial; HEIGHT: 22px; BACKGROUND-COLOR: #CCCCCC" type="submit" value="Gr&aacute;fico" name="btSalvar222" />
                            </form>
                            <form action="con_desem_consultor_pizza.htm">
                              <input style="BORDER-RIGHT: 1px outset; BORDER-TOP: 1px outset; FONT-SIZE: 8pt; BACKGROUND-POSITION-Y: center; LEFT: 120px; BACKGROUND-IMAGE: url(img/icone_pizza.png); BORDER-LEFT: 1px outset; WIDTH: 110px; BORDER-BOTTOM: 1px outset; BACKGROUND-REPEAT: no-repeat; FONT-FAMILY: Tahoma, Verdana, Arial; HEIGHT: 22px; BACKGROUND-COLOR: #CCCCCC" type="submit" value="Pizza" name="btSalvar222" />
                            </form>
                          </font>
                        </div>
                    </td>

                  </tr>
                  <tr>
                    <td bgcolor="#efefef">Clientes</td>
                    <td>
                      <select multiple="multiple" id="my-select2" name="my-select[]">
                        <option value='elem_1'>elem 1</option>
                        <option value='elem_2'>elem 2</option>
                        <option value='elem_3'>elem 3</option>
                        <option value='elem_4'>elem 4</option>
                        ...
                        <option value='elem_100'>elem 100</option>
                      </select>
                    </td>
                  </tr>
                </table>
              </div>
              <!-- /.tab-pane -->
              
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->

          <div class="row" style="display: none;" id="re_co">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header">
                  
                </div>
                <div class="box-body">
                  <table class="table" cellspacing=1 cellpadding=3 
                    bgcolor=#cccccc  id="pesquisaAvancada">
                    <tbody>
                      <tr bgcolor=#efefef>
                        <td colspan=5><span class="style3">Ana Paula Fontes Martins Chiodaro</span> </td>
                      </tr>
                      <tr bgcolor=#fafafa>
                        <td nowrap><div align="center"><strong>Per&iacute;odo</strong></div></td>
                        <td><div align="center"><strong>Receita L&iacute;quida </strong></div></td>
                        <td><div align="center"><strong>Custo Fixo </strong></div></td>
                        <td><div align="center"><strong>Comiss&atilde;o</strong></div></td>
                        <td><div align="center"><strong>Lucro</strong></div></td>
                      </tr>
                      <tr bgcolor=#fafafa>
                        <td nowrap>Janeiro de 2007</td>
                        <td><div align="right">R$ 1.500,00</div></td>
                        <td><div align="right">- R$ 2.000,00</div></td>
                        <td><div align="right">- R$ 1.000,00</div></td>
                        <td><div align="right"><font color="#FF0000">- R$ 1.500,00</font></div></td>
                      </tr>
                      <tr bgcolor=#fafafa>
                        <td nowrap>Fevereiro de 2007 </td>
                        <td><div align="right">R$ 25.000,00</div></td>
                        <td><div align="right">- R$ 2.000,00</div></td>
                        <td><div align="right">- R$ 2.500,00</div></td>
                        <td><div align="right">R$ 20.500,00</div></td>
                      </tr>
                      <tr bgcolor=#efefef>
                        <td nowrap bgcolor="#efefef"><strong>SALDO</strong></td>
                        <td><div align="right"><font color="#000000">R$ 26.500,00</font></div></td>
                        <td><div align="right"><font color="#000000">- R$ 4.000,00</font></div></td>
                        <td><div align="right"><font color="#000000">- R$ 3.500,00</font></div></td>
                        <td><div align="right"><font color="#0000FF">R$ 19.000,00</font></div></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="box-footer">
                  
                </div>
                
              </div>

            </div>
          </div>
        <!--final de div de ganancias-->































        </div>
        <!-- /.col -->
   
		
@endsection
