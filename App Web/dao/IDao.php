<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

interface IDao {

    function create($o);

    function delete($o);

    function update($o);

    function findAll();

    function findById($id);
}
