import React from 'react'
import { Head, Link } from '@inertiajs/react'
import { ChevronLeftIcon } from '@heroicons/react/24/outline'

const Show = ({ blog }) => {
  return (
    <div className="container mx-auto px-4 py-8 max-w-4xl">
      <Head title={blog.title} />
      
      {/* Navigation */}
      <div className="mb-8">
        <Link 
          href={'/'} 
          className="inline-flex items-center text-gray-600 hover:text-indigo-600 transition-colors"
        >
          <ChevronLeftIcon className="h-5 w-5 mr-2" />
          Back to Blogs
        </Link>
      </div>
      
      {/* Blog Header */}
      <header className="mb-8">
        <h1 className="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
          {blog.title}
        </h1>
        
        {/* Blog Metadata */}
        <div className="flex items-center space-x-4 text-gray-500 text-sm">
          {blog.author && (
            <span>By {blog.author}</span>
          )}
          {blog.published_at && (
            <span>Published on {new Date(blog.published_at).toLocaleDateString()}</span>
          )}
          {blog.category && (
            <span className="bg-indigo-50 text-indigo-600 px-2 py-1 rounded-full">
              {blog.category}
            </span>
          )}
        </div>
      </header>
      
      {/* Main Content */}
      {blog.full_thumbnail_path && (
        <div className="mb-8">
          <img 
            src={blog.full_thumbnail_path} 
            alt={blog.title} 
            className="w-full h-96 object-cover rounded-lg shadow-md"
            loading="lazy"
          />
        </div>
      )}
      
      <article 
        className="prose prose-indigo max-w-none prose-img:rounded-lg prose-headings:text-gray-900 prose-p:text-gray-700"
        dangerouslySetInnerHTML={{ __html: blog.description }} 
      />
      
      {/* Related or Next/Previous Blog Links */}
      <div className="mt-12 border-t pt-8">
        <div className="flex justify-between">
          <Link 
            href={'/'} 
            className="text-indigo-600 hover:text-indigo-800 transition-colors"
          >
            ← Previous Blog
          </Link>
          <Link 
            href={'/'} 
            className="text-indigo-600 hover:text-indigo-800 transition-colors"
          >
            Next Blog →
          </Link>
        </div>
      </div>
    </div>
  )
}

export default Show