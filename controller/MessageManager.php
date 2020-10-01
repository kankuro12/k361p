<?php

namespace Controllers;

class MessageManager
{

    public static function SendMail($to, $subject, $message)
    {
        $headers = "From: info@propeace.org.np\r\n";
        mail($to, $subject, $message, $headers);
    }

    public static function sendNotification($heading, $message)
    {
        $content      = array(
            "en" => $message
        );
        $heading = array(
            "en" => $heading
        );
        $hashes_array = array();

        $fields = array(
            'app_id' => "f5d59766-3218-4ae4-8eab-df971c5f52b4",
            'included_segments' => array(
                'All'
            ),
            'contents' => $content,
            'headings' => $heading,
        );

        $fields = json_encode($fields);
        print("\nJSON sent:\n");
        print($fields);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json; charset=utf-8',
            'Authorization: Basic NWUwMmFmMjYtNTY3ZC00NmFlLWE4ZjgtNWQ0OWVmZmJjMmJh'
        ));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

        $response = curl_exec($ch);
        curl_close($ch);
    }
}
