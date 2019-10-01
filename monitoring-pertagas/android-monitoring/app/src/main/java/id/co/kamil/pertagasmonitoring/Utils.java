package id.co.kamil.pertagasmonitoring;

import android.content.Context;
import android.widget.Toast;

import com.android.volley.AuthFailureError;
import com.android.volley.NetworkResponse;
import com.android.volley.NoConnectionError;
import com.android.volley.ParseError;
import com.android.volley.ServerError;
import com.android.volley.TimeoutError;
import com.android.volley.VolleyError;

public class Utils {
    public static void errorResponse(final Context context, VolleyError error){

        if (error instanceof NoConnectionError){
            Toast.makeText(context, R.string.toast_no_internet, Toast.LENGTH_SHORT).show();
        }else if(error instanceof TimeoutError){
            Toast.makeText(context, R.string.toast_timeout, Toast.LENGTH_SHORT).show();
        }else if(error instanceof ServerError){
            Toast.makeText(context, R.string.toast_server_error , Toast.LENGTH_SHORT).show();
        }else if(error instanceof ParseError){
            Toast.makeText(context, R.string.toast_terjadi_kesalahan , Toast.LENGTH_SHORT).show();
        }else if(error instanceof AuthFailureError){
            Toast.makeText(context, R.string.toast_terjadi_kesalahan , Toast.LENGTH_SHORT).show();
        }else {
            Toast.makeText(context, R.string.toast_terjadi_kesalahan , Toast.LENGTH_SHORT).show();
        }
    }
    public static String errorResponseString(VolleyError error){
        String json = null;

        NetworkResponse response = error.networkResponse;
        if(response != null && response.data != null){
            switch(response.statusCode){
                case 403:
                case 500:
                    json = new String(response.data);
                    //json = trimMessage(json, "message");
                    break;
            }
            //Additional cases
        }
        if (json == null){
            return "false";
        }else{
            return json.toString();
        }
    }
}
