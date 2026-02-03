# 🚀 Railway Deployment Guide

Follow these steps to deploy your Inventory Management System on Railway for FREE!

## Prerequisites
- GitHub account
- Railway account (sign up at [railway.app](https://railway.app))
- This project pushed to a GitHub repository

---

## 📋 Step-by-Step Deployment

### Step 1: Push Code to GitHub
```bash
git add .
git commit -m "Prepare for Railway deployment"
git push origin main
```

### Step 2: Create Railway Project
1. Go to [railway.app](https://railway.app)
2. Click "Start a New Project"
3. Choose "Deploy from GitHub repo"
4. Select your `inventory-app` repository
5. Railway will auto-detect your Dockerfile

### Step 3: Add MySQL Database
1. In your Railway project dashboard, click "+ New"
2. Select "Database" → "Add MySQL"
3. Railway will create a MySQL instance automatically

### Step 4: Configure Environment Variables
Click on your web service → Variables tab → Add these:

```
DB_HOST=<MySQL-Host-from-Railway>
DB_NAME=railway
DB_USER=root
DB_PASSWORD=<MySQL-Password-from-Railway>
DB_PORT=<MySQL-Port-from-Railway>
```

**How to get MySQL credentials:**
1. Click on the MySQL service in Railway
2. Go to "Variables" tab
3. Copy `MYSQLHOST`, `MYSQLUSER`, `MYSQLPASSWORD`, `MYSQLPORT`, `MYSQLDATABASE`

### Step 5: Initialize Database
1. Click on MySQL service → "Data" tab
2. Click "Query" button
3. Copy & paste the contents of `.src/init.sql`
4. Click "Run Query"

### Step 6: Configure Domain (Optional)
1. Go to your web service → Settings
2. Scroll to "Networking" section
3. Click "Generate Domain"
4. Railway will give you a free subdomain like: `your-app.up.railway.app`

### Step 7: Deploy!
Railway automatically deploys when you push to GitHub. Monitor the build logs in the "Deployments" tab.

---

## ✅ Verify Deployment

After deployment, visit your Railway domain:
- Frontend: `https://your-app.up.railway.app/`
- API Test: `https://your-app.up.railway.app/api/products.php`

---

## 💰 Free Tier Limits

Railway Free Plan includes:
- **$5 USD credit per month** (~500 hours of runtime)
- Unlimited projects
- 100GB outbound bandwidth
- Perfect for portfolio projects!

---

## 🔧 Troubleshooting

**Build failed?**
- Check Dockerfile syntax
- Ensure `.src/` folder exists

**Database connection error?**
- Verify environment variables are set correctly
- Check if MySQL service is running
- Ensure SSL connection is configured in `db.php`

**App not loading?**
- Check deployment logs in Railway dashboard
- Verify Apache is exposing port 80 (already configured in Dockerfile)

---

## 🔄 Update & Redeploy

Simply push changes to GitHub:
```bash
git add .
git commit -m "Update features"
git push origin main
```

Railway will automatically rebuild and redeploy! 🎉

---

**Need Help?** Check Railway docs: [docs.railway.app](https://docs.railway.app)
