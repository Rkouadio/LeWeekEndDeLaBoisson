
<table>

    <tr>

        <td style="color: darkred;font-size:21px;font-weight: bold">Message utilisateur</td>

    </tr>

    <tr>

        <td><h3>Nom : <strong style="color:#222222">{{session('user_name')}}</strong> </h3>
            <h3>Mail : <strong style="color:#222222">{{session('user_mail')}}</strong> </h3>
            <h2> Message : </h2>
            <pre style="color: darkgreen;font-weight: bold"> {{session('user_message')}}</pre>
            <p style="color:orange"> Ce message a été envoyé depuis le site internet de l'evenement</p></td>

    </tr>

    <tr>

        <td> <a id="logo" class="navbar-brand" href="http://www.weekenddelaboison.com"></a></td>

    </tr>

</table>