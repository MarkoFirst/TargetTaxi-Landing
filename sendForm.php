<?php
  header("Location: /", true, 301);

  $to      = "targettaxi2019@gmail.com";
  $subject = "Заявка с лендинга";
  $message = "Name: ".htmlspecialchars($_POST["name"])
            ."\nNumber: ".htmlspecialchars($_POST["number"])
            ."\nWho: ".htmlspecialchars($_POST["whoAreU"])
            ."\n\n".htmlspecialchars($_POST["text"]);
  $headers = "From: ".htmlspecialchars($_POST["name"])."<".htmlspecialchars($_POST["email"]).">";

  mail($to, $subject, $message, $headers);

  exit();
?>