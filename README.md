This tutorial aims to help you decrypt a password using the Pipelines service and decode an encoded file secret.enc.

Use the provided .acquia.yaml , composer.json, composer.lock, and secret.enc files to add them to your Acquia Cloud repo.  Then encrypt and add your private key to the .acquia.yaml file. Use the syntax from the pipeline help encrypt command to add your encrypted key.

Then look in your build artifact to see the secret written to your lmssecret.txt file.
