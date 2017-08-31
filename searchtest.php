Government Base 
<?php
$json=file_get_contents("http://www.base.gov.pt/base2/rest/contratos?&sort(-publicationDate)");
$data =  json_decode($json);

//var_dump($data);
echo "<table>
           <tr>
                <td><strong>Data de publicação</strong></td>
                <td><strong>Empresa Contratada</strong></td>
                <td><strong>Empresa que Contratou</strong></td>
                <td><strong>ID</strong></td>
                <td><strong>Objecto adquirido</strong></td>
                <td><strong>Preço Contratual</strong></td>
                <td><strong>Data do Contrato</strong></td>
            </tr>";

foreach($data as $object):?>

           <tr>
                <td><strong><?php echo $object->{'publicationDate'}?></strong></td>
                <td><strong><?php echo $object->{'contracted'}?></strong></td>
                <td><strong><?php echo $object->{'contracting'}?></strong></td>
                <td><strong><?php echo $object->{'id'}?></strong></td>
                <td><strong><?php echo $object->{'objectBriefDescription'}?></strong></td>
                <td><strong><?php echo $object->{'initialContractualPrice'}?></strong></td>
                <td><strong><?php echo $object->{'signingDate'}?></strong></td>
            </tr>

<?php endforeach;
      echo "</table>";
?>