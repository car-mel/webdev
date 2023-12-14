using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace WebApplication1.Controllers
{
    public class HomeController : Controller
    {
        public ActionResult Index()
        {
            return View();
        }

        public ActionResult About()
        {
            ViewBag.Message = "Your application description page.";

            return View();
        }

        public ActionResult Contact()
        {
            ViewBag.Message = "Your contact page.";

            return View();
        }

        public ActionResult Login()
        {
            ViewBag.Message = "Your login page.";

            return View();
        }

        public ActionResult AddUserToDatabase(FormCollection fc)
        {
            String name = fc["name"];
            String email = fc["email"];
            String diko = fc["password"];

            user use = new user();
            use.name = name;
            use.email = email;
            use.password = diko;
            use.role_id = 1;

            usersEntities fe = new usersEntities();
            fe.users.Add(use);
            fe.SaveChanges();

            //insert the code that will save these information to the DB

            return RedirectToAction("ShowUser");
        }




        public ActionResult ShowUser()
        {
            usersEntities fe = new usersEntities();
            var userList = (from a in fe.users
                            select a).ToList();

            ViewData["UserList"] = userList;
            return View();
        }

        public ActionResult UserUpdate(int id) {
            usersEntities fe = new usersEntities();
            var userList = (from a in fe.users
                            where a.user_id == id
                            select a).ToList();
            ViewData["UserList"] = userList;
            return View();
        }


        public ActionResult Update(FormCollection fc, int id)
        {
            usersEntities rdbe = new usersEntities();
            user u = (from a in rdbe.users
                      where a.user_id == id
                      select a).FirstOrDefault();

            String new_first_name = fc["new_name"];
            String new_email = fc["new_email"];
            String new_password = fc["new_password"];

            u.name= new_first_name;
            u.email = new_email;
            u.password= new_password;

            rdbe.SaveChanges();

            return RedirectToAction("ShowUser");
        }

        public ActionResult Delete(int id)
        {
            usersEntities rdbe = new usersEntities();
            user u = (from a in rdbe.users
                      where a.user_id == id
                      select a).FirstOrDefault();
            rdbe.users.Remove(u);
            rdbe.SaveChanges();

            return RedirectToAction("ShowUser");
        }
    }
}