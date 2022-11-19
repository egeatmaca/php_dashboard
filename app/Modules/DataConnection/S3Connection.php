<?php
    require './vendor/autoload.php';

    use Aws\S3\S3Client;  
    use Aws\Exception\AwsException;

    function read_file_s3($bucket, $key) {
        $s3Client = new S3Client([
            'region' => 'eu-central-1',
            'version' => 'latest',
            'profile' => 'default'
        ]);

        try {
            $result = $s3Client->getObject([
                'Bucket' => $bucket,
                'Key' => $key
            ]);
            return $result['Body'];
        } catch (AwsException $e) {
            // output error message if fails
            error_log($e->getMessage());
        }
    }

?>

