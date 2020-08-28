<?php
    require_once("includes/header.php");

    if (!isset($_GET["id"])) {
        ErrorMessage::show("No ID passed into page");
    }

    $entityId = $_GET["id"];
    $entity = new Entity($con, $entityId);

    $preview = new PreviewProvider($con, $userLoggedIn);
    echo $preview->createPreviewVideo($entity);

    $seasonProvider = new SeasonProvider($con, $userLoggedIn);
    echo $seasonProvider->create($entity);

    $categoryContainers = new CategoryContainers($con, $userLoggedIn);
    echo $categoryContainers->showCategories($entity->getCategoryId(), "You may also like");
?>